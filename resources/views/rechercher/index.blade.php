@extends('base')

@section('title', 'test de titre')

@section('content')

    <section class="petiteBoite">

        <!-- Composant bootstrap qui utilise du JavaScript pour faire apparaitre une fenetre en cliquant sur un bouton -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#categorie-tab-pane"
                    type="button" role="tab" aria-controls="categorie-tab-pane"
                    aria-selected="true">Catégories</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#tag-tab-pane" type="button"
                    role="tab" aria-controls="tag-tab-pane" aria-selected="false">Tag</button>
            </li>

        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="categorie-tab-pane" role="tabpanel" aria-labelledby="categorie-tab"
                tabindex="0">

                <div class="listeRecherche">


                    <form action="module\selectionCategorie.php" method="POST">
                        <input type="hidden" value="action" name="rechercheCategorie">
                        <button class="boutonRecherche" type="submit">Action</button>
                    </form>

                    <form action="module\selectionCategorie.php" method="POST">
                        <input type="hidden" value="action" name="rechercheCategorie">
                        <button class="boutonRecherche" type="submit">Action</button>
                    </form>

                    <form action="module\selectionCategorie.php" method="POST">
                        <input type="hidden" value="action" name="rechercheCategorie">
                        <button class="boutonRecherche" type="submit">Action</button>
                    </form>

                    <form action="module\selectionCategorie.php" method="POST">
                        <input type="hidden" value="action" name="rechercheCategorie">
                        <button class="boutonRecherche" type="submit">Action</button>
                    </form>

                    <form action="module\selectionCategorie.php" method="POST">
                        <input type="hidden" value="action" name="rechercheCategorie">
                        <button class="boutonRecherche" type="submit">Action</button>
                    </form>

                    <form action="module\selectionCategorie.php" method="POST">
                        <input type="hidden" value="action" name="rechercheCategorie">
                        <button class="boutonRecherche" type="submit">Action</button>
                    </form>

                    <form action="module\selectionCategorie.php" method="POST">
                        <input type="hidden" value="action" name="rechercheCategorie">
                        <button class="boutonRecherche" type="submit">Action</button>
                    </form>

                    <form action="module\selectionCategorie.php" method="POST">
                        <input type="hidden" value="action" name="rechercheCategorie">
                        <button class="boutonRecherche" type="submit">Action</button>
                    </form>

                    <form action="module\selectionCategorie.php" method="POST">
                        <input type="hidden" value="action" name="rechercheCategorie">
                        <button class="boutonRecherche" type="submit">Action</button>
                    </form>
                </div>
            </div>

            <div class="tab-pane fade" id="tag-tab-pane" role="tabpanel" aria-labelledby="tag-tab" tabindex="0">

                <div class="listeRecherche">

                    <form action="module\selectionCategorie.php" method="POST">
                        <input type="hidden" value="ligolegend" name="rechercheTag">
                        <button class="boutonRecherche" type="submit">liguolegend</button>
                    </form>
                    <form action="module\selectionCategorie.php" method="POST">
                        <input type="hidden" value="ligolegend" name="rechercheTag">
                        <button class="boutonRecherche" type="submit">liguolegend</button>
                    </form>

                    <form action="module\selectionCategorie.php" method="POST">
                        <input type="hidden" value="ligolegend" name="rechercheTag">
                        <button class="boutonRecherche" type="submit">liguolegend</button>
                    </form>

                    <form action="module\selectionCategorie.php" method="POST">
                        <input type="hidden" value="ligolegend" name="rechercheTag">
                        <button class="boutonRecherche" type="submit">liguolegend</button>
                    </form>

                    <form action="module\selectionCategorie.php" method="POST">
                        <input type="hidden" value="ligolegend" name="rechercheTag">
                        <button class="boutonRecherche" type="submit">liguolegend</button>
                    </form>

                    <form action="module\selectionCategorie.php" method="POST">
                        <input type="hidden" value="ligolegend" name="rechercheTag">
                        <button class="boutonRecherche" type="submit">liguolegend</button>
                    </form>

                    <form action="module\selectionCategorie.php" method="POST">
                        <input type="hidden" value="ligolegend" name="rechercheTag">
                        <button class="boutonRecherche" type="submit">liguolegend</button>
                    </form>

                    <form action="module\selectionCategorie.php" method="POST">
                        <input type="hidden" value="ligolegend" name="rechercheTag">
                        <button class="boutonRecherche" type="submit">liguolegend</button>
                    </form>

                </div>
            </div>

        </div>
    </section>

    <?php
    /*
switch (true) {

    case !isset($_SESSION["rechercheCategorie"]) && !isset($_SESSION["rechercheTag"]):
        echo '<h1>Veuillez selectionner un critere de recherche</h1>';
        break;

    case (!empty($_SESSION["rechercheCategorie"])):
        $rechercheCategorie = $connexion->selectVideoCategorieID($_SESSION["rechercheCategorie"]);
        echo '
        <h1>Recherche dans la categorie : '.$rechercheCategorie[0]["categorie"].' </h1>

        <section class="boite">';
            
        foreach ($rechercheCategorie as $uneLigne) {
        echo '
            <form action="lecteur.php" method="POST">
                <div class="carteVideo">
                    <button class="videoBouton">
                        <video src="'.$uneLigne['lien'].'" class="videoContainer" muted></video>
                    </button>
                    <h4>'.$uneLigne['titre'].'</h4>
                    <div class="textCarteVideo">
                        <p>'.$uneLigne['duree'].'</p>
                    </div>
                </div>
                <input type="hidden" name="ID_Video" value="'.$uneLigne['ID_Video'].'">
            </form>';
        };
        
        
        break;

    case (!empty($_SESSION["rechercheTag"])):
        
        $rechercheTag = $connexion->selectVideoTagID($_SESSION["rechercheTag"]);
        echo '
        <h1>Recherche dans le tag : '.$rechercheTag[0]["tag"].' </h1>

        <section class="boite">';
            
        foreach ($rechercheTag as $uneLigne) {
        echo '
            <form action="lecteur.php" method="POST">
                <div class="carteVideo">
                    <button class="videoBouton">
                        <video src="'.$uneLigne['lien'].'" class="videoContainer" muted></video>
                    </button>
                    <h4>'.$uneLigne['titre'].'</h4>
                    <div class="textCarteVideo">
                        <p>'.$uneLigne['duree'].'</p>
                    </div>
                </div>
                <input type="hidden" name="ID_Video" value="'.$uneLigne['ID_Video'].'">
            </form>';
        };
        break;
    default:
    echo '<h1>Veuillez selectionner un critere de recherche</h1>';
        break;
}
        */
    ?>
    <section class="boite">

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
    </section>

@endsection
