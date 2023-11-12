@extends('base')

@section('title', 'test de titre')

@section('content')

    <secteur class="boiteLecteur">
        <div class="lecteurVideo">
            <video src="{{ asset('video/' . $video->video_url) }}" class="lecteurVideoContainer" controls></video>
            <h3>{{ $video->title }}</h3>
            <div class="textCarteVideo">
                <p>{{ $video->user->pseudo }}</p>
                <p>{{ $video->duration }}</p>
            </div>
            <p>{{ $video->created_at->format('Y-m-d H:i:s') }}</p>
            <h4>Description</h4>
            <p>{{ $video->description }}</p>
        </div>

        <div class="lecteurCategorieTag">
            <h4>Categorie de la video</h4>
            <div class="lecteurCategorie">
                <h3>{{ $video->category->name }}</h3>
            </div>
            <h4>Tag de la video</h4>
            <div class="lecteurCategorie">
            </div>
        </div>
    </secteur>

    @auth
        @switch(true)
            @case($video->user_id == auth()->id())
            @break

            <section class="petiteBoite">
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modificationModal">
                    Modifier cette video
                </button>
            </section>
            <!-- Button trigger modal -->

            <!-- Modal de modification -->
            <div class="modal fade" id="modificationModal" tabindex="-1" aria-labelledby="modificationModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="modificationModalLabel">Modification de la vidéo</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-primary">Modifier</button>
                        </div>
                    </div>
                </div>
            </div>
            @case(auth()->user()->role_id == 4)
            @break
        @endswitch
    @endauth


    </main>

@endsection
