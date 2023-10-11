@extends('emails.layout')
@section('email_content')
        
        <h2>FÉLICITATIONS</h2>
  
        <h4>Bonjour {{$user->name}},</h4>
        
        <p class="emailContentText">Bienvenue sur Fluzy, la Plateforme de freelance d'élite. Nous vous confirmons votre inscription et nous vous remercions pour votre confiance renouvelé!</p>

@endsection