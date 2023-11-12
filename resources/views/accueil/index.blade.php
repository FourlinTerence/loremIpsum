@extends('base')

@section('title', 'test de titre')

@section('content')

<h1 >NOS VIDEOS</h1>
<section class="boite">
    @foreach ($videos as $video)
    <form action="lecteur.php" method="get">
        <div class="carteVideo">
            <button class="videoBouton">
                <video src="{{ asset('video/' . $video->video_url) }}" class="videoContainer" muted>
                </video>
            </button>
            <h3>{{ $video->title }}</h3>
            <div class="textCarteVideo">
                <p>{{ $video->user->surname }}</p>
                <p>{{ $video->duration }}</p>
            </div>
        </div>
        <input type="hidden" name="ID_Video" value="{{ $video->id }}">
    </form>
    @endforeach
    
</section>

@endsection
