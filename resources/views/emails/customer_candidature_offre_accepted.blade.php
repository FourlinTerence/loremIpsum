@extends('emails.layout')
@section('email_content')

        <h2 class="emailContentText">VOUS AVEZ ACCEPTÉ UNE CANDIDATURE</h2>

        <h3>Bonjour {{$user->prenom}},</h3>

        <p class="emailContentText">Félicitations ! Vous avez accepté la candiadture de {{$freelance->name}} pour votre offre. Si ce n'est pas déjà fait, nous vous invitons à aller dans votre panier pour procéder au réglement de la mission afin que le freelance se mette dès maintenant au travail.</p>

@endsection