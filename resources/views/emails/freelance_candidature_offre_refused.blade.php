@extends('emails.layout')
@section('email_content')

        <h2 class="emailContentText">VOTRE CANDIDATURE A ÉTÉ REFUSÉE</h2>
        
        <h3>Bonjour {{$user->prenom}},</h3>

        <p class="emailContentText">Malheureusement, votre candidature pour l'offre {{$offre->title}} a été rejetée. Vous pouvez contacter le client par message afin d'en savoir plus. Mais ne baissez pas les bras, sur Fluzy il y a encore de nombreuses offres à laquelle vous pouvez postuler !</p>

@endsection