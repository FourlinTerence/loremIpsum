@extends('emails.layout')
@section('email_content')

        <h2 class="emailContentText">UNE NOUVELLE CANDIDATURE SUR VOTRE OFFRE</h2>

        <h3>Bonjour {{$user->prenom}},</h3>
        
        <p class="emailContentText">Un de nos freelance a trouvé votre offre intéressante et y a postuler. Rendez-vous sur votre dashboard pour voir la candidature et le profil du freelance et donnez-lui une réponse !</p>

@endsection