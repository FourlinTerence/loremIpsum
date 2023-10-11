@extends('emails.layout')
@section('email_content')

        <h2 class="emailContentText">VOTRE CANDIDATURE A BIEN ÉTÉ PRIS EN COMPTE</h2>
        
        <h3>Bonjour {{$user->prenom}},</h3>
        <p class="emailContentText">
            Votre candidature pour l'offre a bien été pris en compte. Notre client s'engage à vous donner une réponse dans les plus brefs délais. Restez à l'affût de votre messagerie, souvent nos clients peuvent échanger avec vous pour plus de précisions.</p>
    </td>
</tr>
@endsection

















