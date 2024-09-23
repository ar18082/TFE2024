@extends('base')

@section('title', 'Inscription')

@section('content')
    {{auth()->user() ? auth()->user()->name : 'not connected'}}
    <form action="{{route('inscription.store')}}" method="POST"  enctype="multipart/form-data">
        @csrf
        <div class="text-center row">
            <div class="col-md-2"></div>
            <div class="col-md-8 mb-4">

                <h1>Inscription</h1>
                <div class="progress">
                    <div class="progress-bar colorFour w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <input type="hidden" name="user_id" value="{{$user->id}}">
            <div class="col-md-2"></div>
            <div class="col-md-12 row mt-4 mb-4" id="btnRoles">
                <h3 class="mb-4">{{$user->firstname}} {{$user->name}} vous êtes ?</h3>
                <div class="col-md-2"></div>
                <div class="col-md-3">
                    <button class="btn thirdColor btn-lg" id="btnBabysitter">Babysitter</button>
                </div>
                <div class="col-md-3">
                    <button class="btn colorFour btn-lg" id="btnLesDeux">Les deux </button>
                </div>
                <div class="col-md-3">
                    <button class="btn thirdColor btn-lg" id="btnParent">Parent</button>
                </div>
                <div class="col-md-2"></div>
            </div>
            <input id="role" type="hidden" name="role" value="">
            <div class="col-md-3"></div>
            <div class="col-md-8 row mt-4 md-4" id="inputFile" >
                <div class="col-md-5">
                    <label for="files[]" class="form-label">Photo profil:</label>
                    <input type="file" id="file" class="form-control" name="files[]" step="0.01" value="" required>
                </div>
            </div>
            <div class="col-md-8 row mt-4 md-4" id="formUser" >
                <div class="col-md-5">
                    <label for="phoneNumber" class="form-label">Téléphone:</label>
                    <input type="text" id="phoneNumber" class="form-control" name="phoneNumber" value="{{ old('phoneNumber') }}">
                </div>
                <div class="col-md-5">
                    <label for="adressStreet" class="form-label">Rue:</label>
                    <input type="text" id="adressStreet" class="form-control" name="adressStreet" value="{{ old('adressStreet') }}">
                </div>
                <div class="col-md-5">
                    <label for="adressNumber" class="form-label">Numéro:</label>
                    <input type="text" id="adressNumber" class="form-control" name="adressNumber" value="{{ old('adressNumber') }}">
                </div>
                <div class="col-md-5">
                    <label for="postal_code_localite" class="form-label">code Postal/localité:</label>
                    <select id="postal_code_localite" class="form-control SelectCpLocalite" name="postal_code_localite"></select>
                </div>
            </div>
            <div class="col-md-8 row mt-4 md-4" id="formBabysitter" >

            </div>
            <div class="col-md-8 row mt-4 md-4" id="formParent" >


            </div>
            <div class="col-md-8 row mt-4 md-4" id="formChildren" >

            </div>
            <div class="col-md-12 mt-4">
                <button type="submit" class="btn colorFour btn-lg">Valider</button>
            </div>
        </div>
    </form>
@endsection
