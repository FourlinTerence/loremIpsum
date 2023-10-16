@extends('base')

@section('title', 'test de titre')

@section('content')

<h1 >NOS VIDEOS</h1>
<section class="boite">

    <form action="lecteur.php" method="POST">
        <div class="carteVideo">
            <button class="videoBouton">
                
                <video src="{{ asset('video\5 SECOND TIMER.mp4') }}" class="videoContainer" muted></video>
            </button>
            <h4>Exemple de titre</h4>
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
                
                <video src="{{ asset('video\joke.mp4') }}" class="videoContainer" muted></video>
            </button>
            <h4>Exemple de titre</h4>
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
                
                <video src="{{ asset('video\onepiece live arciton.mp4') }}" class="videoContainer" muted></video>
            </button>
            <h4>Exemple de titre</h4>
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
            <h4>Exemple de titre</h4>
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
                
                <video src="{{ asset('video\joke.mp4') }}" class="videoContainer" muted></video>
            <h4>Exemple de titre</h4>
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
                
                <video src="{{ asset('video\onepiece live arciton.mp4') }}" class="videoContainer" muted></video>
            </button>
            <h4>Exemple de titre</h4>
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
            <h4>Exemple de titre</h4>
            <div class="textCarteVideo">
                <p>Pyrobarbare</p>
                <p>1h45</p>
            </div>
        </div>
        <input type="hidden" name="ID_Video" value="'.$uneLigne['ID_Video'].'">
    </form>
</section>

@endsection
