@extends('base')

@section('title', 'test de titre')

@section('content')

<secteur class="boiteLecteur">
    <div class="lecteurVideo">
        <video src="{{ asset('video\5 SECOND TIMER.mp4') }}" class="lecteurVideoContainer" controls></video>
        <h2>exemple de titre</h2>
        <div class="textCarteVideo">
            <p>pseudo de l auteur</p>
            <p>duree de video</p>
        </div>
        <p>date de publication</p>
        <h4>Description</h4>
        <p>Description de la video long texte</p>
    </div>
    
    
    <div class="lecteurCategorieTag">
        <h4>Categorie de la video</h4>
        <div class="lecteurCategorie">



            <form action="module\selectionCategorie.php" method="POST">
                <input type="hidden" value="'.$uneLigne['ID_Categorie'].'" name="rechercheCategorie">
                <button class="boutonRecherche" type="submit">'.$uneLigne['categorie'].'</button>
            </form>

        </div>


        <h4>Tag de la video</h4>
        
        <div class="lecteurCategorie">
            


            
            <form action="module\selectionCategorie.php" method="POST">
                <input type="hidden" value="'.$uneLigne['ID_Tag'].'" name="rechercheCategorie">
                <button class="boutonRecherche" type="submit">'.$uneLigne['tag'].'</button>
            </form>

        </div>
    
    </div>
</secteur>



</main>

@endsection