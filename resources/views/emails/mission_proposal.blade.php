@extends('emails.layout')
@section('email_content')

        <h2 class="emailContentText">UNE NOUVELLE MISSION POUR VOUS ?</h2>

        <h3>Bonjour {{$user->prenom}},</h3>
        <p class="emailContentText">Un de nos clients a trouvé votre profil intéressant et souhaite vous proposer une mission sur-mesure ! Serez-vous prêt à la relever ? Venez consulter les détails de la mission ici !</p>

@endsection