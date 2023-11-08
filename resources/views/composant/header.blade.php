<header>
    <nav>
        <div class="lienNav">
            <a href="index.php"><img class="logo"
                    src="{{ asset('image/tv-media-logo-design.-video-cam-sign.-png_109082.jpg') }}" alt=""></a>
            <p><a href="recherche.php" class="lienNavStyle">Recherche</a>
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
                            <p>{{ $user->name }}</p>
                            <a href="module\sessionUnset.php">Déconnexion</a>
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

                    <button type="button" class="btn btn-primary btn-lg ms-2" data-bs-toggle="modal"
                        data-bs-target="#connexion">Connexion</button>
                </div>
        @endswitch
        </div>
    </nav>


    <!-- Modal d'inscription-->
    <form action="module\insertionUtilisateur.php" method="post">
        <div class="modal fade" id="inscription" tabindex="-1" aria-labelledby="inscriptionLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="inscriptionLabel">Formulaire d'inscription</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="labelImput">
                            <label for="inscriptionNom" class="form-label">Nom</label>
                            <input type="text" id="inscriptionNom" class="form-control"
                                placeholder="Inscrivez votre nom" name="nom">
                        </div>
                        <label for="inscriptionPrenom" class="form-label">Prenom</label>
                        <input type="text" id="inscriptionPrenom" class="form-control"
                            placeholder="Inscrivez votre prenom" name="prenom">

                        <label for="inscriptionPseudo" class="form-label">Pseudo</label>
                        <input type="text" id="inscriptionPseudo" class="form-control"
                            placeholder="Inscrivez votre pseudo" name="pseudo">


                        <label for="inscriptionEmail" class="form-label">Adresse Email</label>
                        <input type="email" class="form-control" id="inscriptionEmail" placeholder="name@example.com"
                            name="email">


                        <label for="inscriptionMotDePasse" class="form-label">Mot de passe</label>
                        <input type="password" id="inscriptionMotDePasse" class="form-control" name="mdp">

                        <label for="v_inscriptionMotDePasse" class="form-label">Veuillez confirmer votre mot de
                            passe</label>
                        <input type="password" id="v_inscriptionMotDePasse" class="form-control" name="v_mdp">

                        <input type="hidden" value="Abonnee" name="role">

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

    <!-- Modal de connexion-->
    <form action="module\connexionUtilisateur.php" method="post">
        <div class="modal fade" id="connexion" tabindex="-1" aria-labelledby="connexionLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="connexionLabel">Si vous ne possedez pas de compte, veuillez
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <label for="connexionEmail" class="form-label">Adresse Email</label>
                        <input type="email" class="form-control" id="connexionEmail"
                            placeholder="name@example.com" name="email">


                        <label for="connexionMotDePasse" class="form-label">Mot de passe</label>
                        <input type="password" id="connexionMotDePasse" class="form-control" name="mdp">
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Confirmer</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>>
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
                        <div class="labelImput">
                            <label for="linkVideo" class="form-label ">Lien</label>
                            <input class="form-control inputSize" type="file" id="linkVideo">
                        </div>
                        <div class="labelImput">
                            <label for="titreVideo" class="form-label">Titre</label>
                            <input type="text" id="titreVideo" class="form-control inputSize"
                                placeholder="Inscrivez le titre de la vidéo" name="title"
                                value="{{ old('title') }}">
                        </div>
                        <div class="labelImput">
                            <label for="description" class="form-label">Description</label>
                            <textarea type="number" id="description" class="form-control inputSize" placeholder="Decrivez la vidéo"
                                name="description">{{ old('description') }}
                        </textarea>
                        </div>
                        <div class="labelImput">
                            <label for="duree" class="form-label">durée</label>
                            <input type="time" step="1" id="duree" class="form-control inputSize"
                                placeholder="Inscrivez le titre de la vidéo" name="duration"
                                value="{{ old('duration') }}">
                        </div>
                        <div class="labelImput">
                            <label for="categorie" class="form-label">Catégorie</label>
                            <select id="categorie" class="form-control inputSize" name="categorie">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-success">Enregistrer</button>
                    </div>
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                </form>
            </div>
        </div>
    </div>
</header>
