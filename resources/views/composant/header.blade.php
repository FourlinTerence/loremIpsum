<header>
    <nav>
        <div class="lienNav">
            <a href="{{ route('indexindex') }}"><img class="logo"
                    src="{{ asset('image/tv-media-logo-design.-video-cam-sign.-png_109082.jpg') }}" alt=""></a>
            <p><a href="" class="lienNavStyle">Recherche</a>
            </p>
            <p><a href="recherche.php" class="lienNavStyle">Chaines</a>
            </p>
        </div>

        @switch(Auth::check())
            @case(true)
                <div class="connexionNav">
                    <div class="btn-group">

                        <a class="btn btn-secondary btn-lg" type="submit">
                            Espace personnel
                        </a>

                        <button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <p>{{ Auth::user()->name }}</p>
                            <form action="{{ route('auth.logout') }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="postVideo">Se déconnecter</button>
                            </form>
                            <button class="boutonRecherche postVideo" type="btn" data-bs-toggle="modal"
                                data-bs-target="#modalUploadVideo">Soumettre une video</button>
                        </ul>
                    </div>
                </div>
            @break

            @default
                <div class="connexionNav">
                    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"
                        data-bs-target="#inscription">Inscription</button>

                    <a href="{{ route('auth.login') }}" class="btn btn-primary btn-lg ms-2">Connexion</a>
                </div>
        @endswitch
        </div>
    </nav>


    <!-- Modal d'inscription-->
    <form action="{{ route('auth.suscrib') }}" method="post">
        @csrf
        <div class="modal fade" id="inscription" tabindex="-1" aria-labelledby="inscriptionLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="inscriptionLabel">Formulaire d'inscription</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">

                        <div class="allInput">
                            <div class="labelImput">
                                <label for="inscriptionNom" class="form-label">Nom</label>
                                <input type="text" id="inscriptionNom" class="form-control inputSize"
                                    placeholder="Inscrivez votre nom" name="name" value="{{ old('name') }}">
                            </div>
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="allInput">
                            <div class="labelImput">
                                <label for="inscriptionPrenom" class="form-label">Prénom</label>
                                <input type="text" id="inscriptionPrenom" class="form-control inputSize"
                                    placeholder="Inscrivez votre prénom" name="surname" value="{{ old('surname') }}">
                            </div>
                            @error('surname')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="allInput">
                            <div class="labelImput">
                                <label for="inscriptionage" class="form-label inputSize">Age</label>
                                <input type="number" id="inscriptionAge" class="form-control" min="0" max="120" name="age"
                                    value="{{ old('age') }}">
                            </div>
                            @error('age')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="allInput">
                            <div class="labelImput">
                                <label for="inscriptionSexe" class="form-label inputSize">Sexe</label>
                                <select id="inscriptionSexe" class="form-control inputSize" name="sexe">
                                    <option value="masculin">Masculin</option>
                                    <option value="feminin">Féminin</option>
                                </select>
                            </div>
                            @error('sexe')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="allInput">
                            <div class="labelImput">
                                <label for="inscriptionAdresse" class="form-label">Adresse</label>
                                <textarea id="inscriptionAdresse" class="form-control inputSize" name="adress">
                                </textarea>
                            </div>
                            @error('adress')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="allInput">
                            <div class="labelImput">
                                <label for="inscriptionPseudo" class="form-label">Pseudo</label>
                                <input type="text" id="inscriptionPseudo" class="form-control inputSize"
                                    placeholder="Inscrivez votre pseudo" name="pseudo" value="{{ old('pseudo') }}">
                            </div>
                            @error('pseudo')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="allInput">
                            <div class="labelImput">
                                <label for="inscriptionEmail" class="form-label">Adresse mail</label>
                                <input type="email" id="inscriptionEmail" class="form-control inputSize"
                                    placeholder="name@example.com" name="email" value="{{ old('email') }}">
                            </div>
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="allInput">
                            <div class="labelImput">
                                <label for="inscriptionPassword" class="form-label">Mot de passe</label>
                                <input type="password" id="inscriptionPassword" class="form-control inputSize"
                                    name="password">
                            </div>
                            @error('password')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="allInput">
                            <div class="labelImput">
                                <label for="inscriptionconfirmpassword" class="form-label">Confirmez le mot de
                                    passe</label>
                                <input type="password" id="inscriptionconfirmpassword" class="form-control inputSize"
                                    name="password_confirmation">
                            </div>
                            @error('password_confirmation')
                                {{ $message }}
                            @enderror
                        </div>
  
                        <input type="hidden" value="1" name="role_id">
                    
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Confirmer</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>

                    </div>
                </div>

            </div>
        </div>
        </div>
    </form>


    <!-- Modal d'insersion de video -->
    <div class="modal fade" id="modalUploadVideo" tabindex="-1" aria-labelledby="modalUploadVideoLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalUploadVideoLabel">Ajouter une vidéo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="">
                    @csrf
                    <div class="modal-body">

                        <div class="allInput">
                            <div class="labelImput">
                                <label for="linkVideo" class="form-label ">Lien</label>
                                <input class="form-control inputSize" type="file" id="linkVideo"
                                    name="video_url">
                            </div>
                            @error('video_url')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="allInput">
                            <div class="labelImput">
                                <label for="titreVideo" class="form-label">Titre</label>
                                <input type="text" id="titreVideo" class="form-control inputSize"
                                    placeholder="Inscrivez le titre de la vidéo" name="title"
                                    value="{{ old('title') }}">
                            </div>
                            @error('title')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="allInput">

                            <div class="labelImput">
                                <label for="description" class="form-label">Description</label>
                                <textarea type="number" id="description" class="form-control inputSize" placeholder="Decrivez la vidéo"
                                    name="description">{{old('description')}}</textarea>
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
                                    value="{{ old('duration') }}">
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
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('category_id')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    @auth
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    @endauth
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-success">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>
