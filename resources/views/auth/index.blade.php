@extends('base')

@section('title', 'test de titre')

@section('content')
    <h1>CONNEXION</h1>
    <section class="login">
        <form method="POST" action="{{ route('auth.login') }}">
            @csrf
            <div class="modal-body">
                <div class="allInput">
                    <div class="labelImput">
                        <label for="titreVideo" class="form-label">Adresse mail</label>
                        <input type="email" id="titreVideo" class="form-control inputSize" placeholder="name@example.com"
                            name="email" value="{{ old('email') }}">
                    </div>
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>
                <div class="allInput">
                    <div class="labelImput">
                        <label for="titreVideo" class="form-label">Mot de passe</label>
                        <input type="password" id="titreVideo" class="form-control inputSize" name="password">
                    </div>
                    @error('password')
                        {{ $message }}
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Se connecter</button>

            </div>
        </form>

    </section>

@endsection
