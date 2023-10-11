@extends('emails.layout')
@section('email_content')

        <h2 class="emailContentText">VOTRE CANDIDATURE A ÉTÉ ACCEPTÉ</h2>
        
        <h3>Bonjour {{$user->prenom}},</h3>
        
        <p class="emailContentText">Félicitations ! Votre candidature pour l'offre {{$offre->title}} a bien été accepté. Vous serez notifié dès lors que le client aura procéder au paiement pour démarrer la mission. </p>
@endsection







