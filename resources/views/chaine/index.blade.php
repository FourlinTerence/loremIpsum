@extends('base')

@section('title', 'test de titre')

@section('content')

    <section class="petiteBoite">

        <!-- Composant bootstrap qui utilise du JavaScript pour faire apparaitre une fenetre en cliquant sur un bouton -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">

            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#accueil-tab-pane"
                    type="button" role="tab" aria-controls="accueil-tab-pane" aria-selected="true">Accueil</button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link" id="video-tab" data-bs-toggle="tab" data-bs-target="#video-tab-pane" type="button"
                    role="tab" aria-controls="video-tab-pane" aria-selected="false">Vidéo</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-boutique-tab" data-bs-toggle="pill" data-bs-target="#pills-boutique"
                    type="button" role="tab" aria-controls="pills-boutique" aria-selected="false">Boutique</button>
            </li>

        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="accueil-tab-pane" role="tabpanel" aria-labelledby="accueil-tab"
                tabindex="0">

                <div class="listeRecherche">

                    <p>ICI viendra la presentation de la chaine</p>

                </div>
            </div>

            <div class="tab-pane fade" id="video-tab-pane" role="tabpanel" aria-labelledby="video-tab" tabindex="0">

                <div class="rechercherVideoBoite">

                    <form action="lecteur.php" method="POST">
                        <div class="carteVideo">
                            <button class="videoBouton">

                                <video src="{{ asset('video\5 SECOND TIMER.mp4') }}" class="videoContainer" muted></video>
                            </button>
                            <h3>Exemple de titre</h3>
                            <div class="textCarteVideo">
                                <p>Pyrobarbare</p>
                                <p>1h45</p>
                            </div>
                        </div>
                        <input type="hidden" name="ID_Video" value="'.$uneLigne['ID_Video'].'">
                    </form>

                    <form action="lecteur.php" method="POST">
                        <div class="carteVideo">
                            <button class="videoBouton">

                                <video src="{{ asset('video\5 SECOND TIMER.mp4') }}" class="videoContainer" muted></video>
                            </button>
                            <h3>Exemple de titre</h3>
                            <div class="textCarteVideo">
                                <p>Pyrobarbare</p>
                                <p>1h45</p>
                            </div>
                        </div>
                        <input type="hidden" name="ID_Video" value="'.$uneLigne['ID_Video'].'">
                    </form>

                </div>
            </div>

            <div class="tab-pane fade" id="pills-boutique" role="tabpanel" aria-labelledby="pills-boutique-tab"
                tabindex="0">
                <div class="listeRecherche">

                    <p>ICI viendra la presentation de la chaine</p>

                </div>
            </div>
        </div>

        </div>
    </section>




@endsection
