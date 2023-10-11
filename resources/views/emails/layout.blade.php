<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/mail.css') }}">
</head>
<body>

    <header>
        <div class="flexContainer">
            <a target="_blank" href="https://viewstripo.email/"><img src="{{ asset('img\favicon.png') }}" alt="Logo"></a>
            <div class="headerTitleContainer">
                <div class="headerLine" id="first"></div>
                <h1>FLUZY, votre plateforme de freelance d'élite</h1>
                <div class="headerLine"></div>
            </div>
        </div>
        <div class="headerLine2"></div>

        @yield('email_content')
        
        <a target="_blank" href="" class="accountLink">ALLER SUR MON COMPTE</a>
    </header>

    
    <main>
        <div class="flexContainer">
            <a target="_blank" href="https://viewstripo.email/"><img src="{{ asset('img\602_gift_box_delivery_surprize_valentine_valentines_day_love256.png') }}" alt="CARD"></a>
            <div class="textContainer">
                <h3>PARLEZ DE NOUS AUTOUR DE VOUS,</h3>
                <p class="mainText">Vous avez des amis freelances ? Vous connaissez des entreprises qui recrute ? Envoyez leur ce lien pour s'inscrire !</p>
                <a target="_blank" href="" class="suscribLink">Envoyer le lien</a>
            </div>
        </div>
    
    </main>

    <footer>

        <div class="gridContainer">

            <div class="logoContainer">
                <a target="_blank" href="https://viewstripo.email/"><img src="{{ asset('img\17971617974647919.png') }}" alt=""></a>
                <p>COMMISSION FAIBLE</p>
            </div>

            <div class="logoContainer">
                <a target="_blank" href="https://viewstripo.email/"><img src="{{ asset('img\80801617974647921.png') }}" alt=""></a>
                <p>PAIEMENT SIMPLIFIÉ</p>
            </div>

            <div class="logoContainer">
                <a target="_blank" href="https://viewstripo.email/"><img src="{{ asset('img\77861617974647919.png') }}" alt=""></a>
                <p>RÉACTIVITÉ</p>
            </div>

            <div class="logoContainer">
                <a target="_blank" href="https://viewstripo.email/"><img src="{{ asset('img\59831617975283573.png') }}" alt=""></a>
                <p>QUALITÉ</p>
            </div>

        </div>


        <div class="footerFlexContainer">

            <div class="footerTextContainer">
                <p class="textFooter">Vous ne voulez plus recevoir cet email ?</p>
                <a target="_blank" class="textFooter" href="https://viewstripo.email/">Se désabonner</a><br>
                <a target="_blank" class="textFooter" href="https://viewstripo.email/">Voir dans le navigateur</a>
            </div>

            <div class="logoReseauContainer">
                <a target="_blank" href="https://viewstripo.email/"><img src="{{ asset('img\facebook-square-white-bordered.png') }}" alt=""></a>
                <a target="_blank" href="https://viewstripo.email/"><img src="{{ asset('img\twitter-square-white-bordered.png') }}" alt=""></a>
                <a target="_blank" href="https://viewstripo.email/"><img src="{{ asset('img\instagram-square-white-bordered.png') }}" alt=""></a>
                <a target="_blank" href="https://viewstripo.email/"><img src="{{ asset('img\youtube-square-white-bordered.png') }}" alt=""></a>
            </div>
        

        </div>
        
    </footer>
    
</body>
</html>