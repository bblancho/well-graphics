<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> WELL-GRAPHICS - @yield('title') </title>
        @include('parts.link')
        @yield('style')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
        <style>
            .safari_only{margin-top:10rem!important;}
            /***Safari hack***/
            @media not all and (min-resolution:.001dpcm) { 
                @media {
                    #safari_only { 

                      margin-top: 10rem!important; 
                  }
                }
            }

            @media screen and (min-color-index:0) and(-webkit-min-device-pixel-ratio:0) { 
                @media {
                    #safari_only { 

                      margin-top: 10rem!important; 
                  }
                }
            }    
        </style>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"  />
        @yield('extra-script')
    </head>

    <body class="">
        <header>
            @include('parts.menu')
            <!-- END nav -->

            <!-- <div class="js-fullheight"> -->
            @yield('hero')

        </header>

        <div class="main-content-wg">
            @yield('content')

            @if (!Route::has('/'))
                @include('parts.banner')
            @endif
        </div>

        @if (Route::has('/'))
            <hr class="shadow-box">
        @endif
        
        @if( Session::has('message'))
        <!-- message Modal -->
        <div class="modal fade" id="msgmodal" tabindex="-1" role="dialog" aria-labelledby="msgmodalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header wellblue">
                        <h5 class="modal-title text-light" id="msgmodalLabel">Notification</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="text-light">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        {{ Session::get('message') }}
                    </div>
                    <div class="modal-footer wellred">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">D'accord</button>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @include('parts.footer')

        @yield('script')
        <script>
            $(function() {
                moment.locale('fr');
                $('input[name="daterdv"]').daterangepicker({
                    singleDatePicker: true,
                    showDropdowns: true,
                    minYear: 1901,
                    maxYear: parseInt(moment().format('YYYY'),10)
                });
            });
        </script>

        @if( Session::has('message'))
        <script type="text/javascript">
            $(document).ready(function() {
                $('#msgmodal').modal();
              });
        </script>
        @endif
        @stack('script_stripe')

    </body>
</html>
