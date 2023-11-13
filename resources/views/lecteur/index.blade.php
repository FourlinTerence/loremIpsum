@extends('base')

@section('title', $video->title)

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
                <section class="petiteBoite">
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modificationModal">
                        Modifier cette video
                    </button>

                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#suppressionModal">
                        Supprimer cette vidéo
                    </button>

                </section>

                <!-- Modal de modification -->
                <div class="modal fade" id="modificationModal" tabindex="-1" aria-labelledby="modificationModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="modificationModalLabel">Modification de la vidéo</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="POST" action="{{ route('lecteurUpdate') }}">
                                @csrf
                                <div class="modal-body">

                                    <div class="allInput">
                                        <div class="labelImput">
                                            <label for="titreVideo" class="form-label">Titre</label>
                                            <input type="text" id="titreVideo" class="form-control inputSize"
                                                placeholder="Inscrivez le titre de la vidéo" name="title"
                                                value="{{ old('title', $video->title) }}">
                                        </div>
                                        @error('title')
                                            {{ $message }}
                                        @enderror
                                    </div>

                                    <div class="allInput">

                                        <div class="labelImput">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea type="number" id="description" class="form-control inputSize" placeholder="Decrivez la vidéo"
                                                name="description">{{ old('description', $video->description) }}</textarea>
                                        </div>
                                        @error('description')
                                            {{ $message }}
                                        @enderror
                                    </div>

                                    <div class="allInput">
                                        <div class="labelImput">
                                            <label for="duree" class="form-label">durée</label>
                                            <input type="time" step="1" id="duree" class="form-control inputSize"
                                                placeholder="Inscrivez le titre de la vidéo" name="duration"
                                                value="{{ old('duration', $video->duration) }}">
                                        </div>
                                        @error('duration')
                                            {{ $message }}
                                        @enderror
                                    </div>

                                    <div class="allInput">
                                        <div class="labelImput">
                                            <label for="categorie" class="form-label">Catégorie</label>
                                            <select id="categorie" class="form-control inputSize" name="category_id">
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        @if ($category->id == $video->category_id) selected @endif>{{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('category_id')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                
                                    <input type="hidden" name="user_id" value="{{ $video->user_id }}">
                                    <input type="hidden" name="video_url" value="{{ $video->video_url }}">
                                
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                                    <button type="submit" class="btn btn-success">Enregistrer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal de suppression -->
                <div class="modal fade" id="suppressionModal" tabindex="-1" aria-labelledby="suppressionModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="suppressionModalLabel">Suppression de vidéo</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <form action="{{ route('videos.destroy', ['video' => $video->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <div class="modal-body">
                                    <p>Etes vous sur de vouloir supprimer la vidéo nommé {{ $video->title }}?</p>
                                </div>
                                <input type="hidden" name="user_id" value="{{ $video->user_id }}">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Annuler la
                                        suppression</button>
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @break

            @case(auth()->user()->role_id == 4)
            @break
        @endswitch
    @endauth


    </main>

@endsection
