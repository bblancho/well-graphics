@extends('layouts.frontLayout')

@section('title') Checkout @endsection
@section('extra-script')  <script src="https://js.stripe.com/v3/"></script> @endsection

@section('hero')
<div class="hero-wrap shadow-box  mb-3" style="height:50vh">
    <div class="overlay contact" style="height:50vh"></div>
    <div id="particles-js" style="height:50vh"></div>
    <div class="container">
        <div class="row gt-0 content-text center-flex">
            <div class="col-md-12 hide-on-med-and-down pb-8 mb-8"></div>
            <div class="col-md-10 hero-wg text-center">
                <div class="container">
                    <h1 class="mb-3 h1-fluid text-uppercase" data-aos="zoom-in-down" data-aos-duration="1000"> Mon panier </h1>
                    <p data-aos="zoom-in-up" data-aos-duration="1000">
                        Ea adipisicing enim nulla excepteur id anim consequat ullamco enim irure. Cillum minim mollit nostrud ullamco est
                        aute sunt tempor minim aliqua nulla.
                    </p>
                </div>
            </div>
            <div class="col-md-12 hide-on-med-and-down py-5 mb-5"></div>
        </div>
    </div>
</div>
@endsection

@section('content')
    <div class="container mb-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="{{ route('cart.paiement') }}" id="payment-form">
                    @csrf

                    <label for="card-element">
                        Carte de crédit
                    </label>

                    <div class="d-flex">
                        <div id="card-element" class="flex-grow-1 mr-3"></div>
                        <button class="btn btn-success mb-3" >Payer: @price($total * 100) </button>
                    </div>

                    <!-- Used to display form errors. -->
                    <div id="card-errors" role="alert"></div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script_stripe')
<script type="text/javascript">

    let stripe = Stripe("{{ env('STRIPE_PUBLISHABLE_KEY') }}");

    // Create an instance of Elements.
    let  elements = stripe.elements();

    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)
    let style = {
        base: {
            color: '#32325d',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
            color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };

    // Create an instance of the card Element.
    let card = elements.create( 'card', {style: style} ) ;

    // Add an instance of the card Element into the `card-element` <div>.
    card.mount('#card-element');

    // Erreur
    card.on('change', ({error}) => {
        const displayError = document.getElementById('card-errors');
        if (error) {
            displayError.classList.add('alert','alert-danger');
            displayError.innerHTML = error.message;
        } else {
            displayError.classList.remove('alert','alert-danger');
            displayError.innerHTML = '';
        }
    });

    function createToken() {
        stripe.createToken(card).then(function(result) {
            if (result.error) {
                var errorElement = document.getElementById('card-errors');
                errorElement.innerHTML ='<div class="alert alert-danger">'+ result.error.message +'</div>' ;
                console.log(result.error.message);
            } else {
                // Send the token to your server
                stripeTokenHandler(result.token);
            }
        });
    };

    function stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);

        form.appendChild(hiddenInput);

        // Submit the form
        console.log (form.submit) ;

        form.submit();
    }// Fun stripeTokenHandler

    //Paiement
    var form = document.getElementById('payment-form');

    form.addEventListener('submit', function(ev) {
        ev.preventDefault();

        stripe.confirmCardPayment("{{ $clientSecret }}", {
            payment_method: {
                card: card
            }
        }).then(function(result) {
            if (result.error) {
                // Show error to your customer (e.g., insufficient funds)
                let errorElement = document.getElementById('card-errors');
                errorElement.innerHTML ='<div class="alert alert-danger">'+ result.error.message +'</div>' ;
                console.log(result.error.message);
            } else {
                // The payment has been processed!
                if (result.paymentIntent.status === 'succeeded') {
                    // console.log(result.paymentIntent) ;
                    // console.log(result.paymentIntent.client_secret) ;
                    // console.log(result.paymentIntent.id) ;

                    createToken() ;

                }// Fin if success
            }
        });

    });// Fin validation


</script>
@endpush
