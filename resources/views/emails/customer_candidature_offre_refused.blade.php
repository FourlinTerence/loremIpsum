@extends('emails.layout')
@section('email_content')
        
        <h2 class="emailContentText">VOUS AVEZ REFUSÉ UNE CANDIDATURE</h2>

        <h3>Bonjour {{$user->prenom}},</h3>
        
        <p class="emailContentText">Nous vous confirmons que vous avez refusé l'offre du freelance {{$freelance->name}}. Celui-ci sera notifié qu'il n'a pas été retenu. N'hésitez pas à nous solliciter si vous ne trouvez pas de freelance afin que nous vous aidions dans vos recherches.</p>

@endsection