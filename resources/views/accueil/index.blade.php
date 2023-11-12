@extends('base')

@section('title', 'test de titre')

@section('content')

    <h1>NOS VIDEOS</h1>
    <section class="boite">
        @foreach ($videos as $video)
            <div class="carteVideo">
                <a class="videoBouton" href="{{ route('lecteur', ['slug' => $video->slug]) }}">
                    <video src="{{ asset('video/' . $video->video_url) }}" class="videoContainer" muted></video>
                </a>
                <h3>{{ $video->title }}</h3>
                <div class="textCarteVideo">
                    <p>{{ $video->user->pseudo }}</p>
                    <p>{{ $video->duration }}</p>
                </div>
            </div>
        @endforeach

        {{ $videos->links() }}
    </section>

@endsection
