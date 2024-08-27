@extends('base')

@section('title', 'Inscription')
@section('content')
    <style>
        body{
            margin:0;
        }
        .box-rebours{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
         .box_heure, .box_minute, .box_seconde {
            padding: 10px;
        }
        #jour, #heure, #minute, #seconde {
            background:black;
            padding: 10px 20px;
            color: white;
            font-size: 3rem;
            font-weight: bold;
        }
        #jour_label, #heure_label, #minute_label, #seconde_label {
            font-size: 1.5rem;
        }
    </style>
    <div class="container">
        <h2>Nous avons reçu votre demande d'inscription</h2>
        <p>Vous recevrez un email afin de confirmer votre adresse email.</p>
        <p>la validité de cette email expire dans : </p>
        {{--un compte a rebours pour la validité de l'email--}}
        <div class="box-rebours">
            <div class="box_heure">
                <div id="heure">00</div>
                <span id="heure_label">Heures</span>
            </div>
            <div class="box_minute">
                <div id="minute">00</div>
                <span id="minute_label">Minutes</span>
            </div>
            <div class="box_seconde">
                <div id="seconde">00</div>
                <span id="seconde_label">Secondes</span>
            </div>
        </div>



        <p>Si vous n'avez pas reçu l'email, veuillez vérifier votre dossier spam.</p>
        <p>Si vous avez des questions, n'hésitez pas à nous contacter.</p>
        <p>Vous pouvez également consulter notre FAQ pour plus d'informations.</p>


        <a href="{{route('home')}}" class="btn btn-primary">Retour à l'accueil</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

    </div>

@endsection
