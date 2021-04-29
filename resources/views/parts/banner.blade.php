<div class="container-fluid shadow-box">
    <div class="row">
        <div class="container col-md-6 pt-6"
        @if (Request::path() === 'commandes')
            {{ '' }}
        @else
            data-aos="zoom-in-up" data-aos-duration="1000"
        @endif
        >
            <h2 class="h2-fluid lead text-center text-capitalize">
                <span class="wellblue-text fz-01 text-uppercase">Vous souhaitez prendre rendez-vous?</span>
            </h2>
            <div class="mb-6">
                <p class="text-center">
                    Il est possible d’établir un rendez-vous afin de vous accompagner pour la réalisation de votre
                    projet.
                </p>
                <p class="text-center">
                    <a href="#" class="link-sci text-uppercase border shadow-box" data-toggle="modal"
                        data-target="#rdv"><span>Prendre rendez-vous</span></a>
                </p>
            </div>
        </div>
        <div class="container wellblue col-md-6 pt-6"
        @if (Request::path() === 'commandes')
            {{ '' }}
        @else
            data-aos="zoom-in-up" data-aos-duration="1000"
        @endif
        >
            <h2 class="h2-fluid lead text-center text-capitalize">
                <span class="fz-01 text-light text-uppercase">Ou s'inscrire à notre newsletter</span>
            </h2>
            <div class="mb-6">
                <p class="text-center ">
                    En s’inscrivant à notre newsletter, vous serez informés de nos offres promotionnelles ainsi que de nos
                    nouveautés.
                </p>
                <p class="text-center">
                    <form method="POST" action="/index.php/contact/newsletter">
                        @csrf
                        <div class="center-flex">
                            <div class="input-group shadow-box w-75">
                                <input type="email" name="email" class="form-control brd-0" placeholder="Votre e-mail">
                                <span class="input-group-btn">
                                    <button class="btn btn-light brd-0 text-uppercase" type="submit">Je m'inscris</button>
                                </span>
                            </div>
                        </div>
                    </form>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- RDV Modal -->
<div class="modal fade" id="rdv" tabindex="-1" role="dialog" aria-labelledby="rdvLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header wellred">
                <h5 class="modal-title text-light text-uppercase" id="rdvLabel">Prendre rendez-vous</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-light">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('contacts.rdv') }}">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="text" name="name" placeholder="Votre nom complet/Votre société"
                                class="form-control" id="nom">
                        </div>

                        <div class="form-group col-md-12">
                            <input type="email" name="email" placeholder="Votre e-mail" class="form-control" id="email">
                        </div>

                        <div class="container-fluid">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="membre">Rendez-vous avec un :</label><br>
                                    <select name="membre" class="custom-select">
                                        <option selected>Choisissez</option>
                                        <option value="graphiste">Graphiste</option>
                                        <option value="webmaster">Développeur web</option>
                                        <option value="responsable">Responsable</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="daterdv">Date souhaitée :</label><br>
                                    <input type="text" name="daterdv" placeholder="10/24/1984" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <textarea name="notes" class="form-control" placeholder="Note pour la demande"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer wellblue">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-success text-uppercase">Envoyer la demande</button>
                </div>
            </form>
        </div>
    </div>
</div>
