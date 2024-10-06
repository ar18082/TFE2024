@extends('base')

@section('title', 'Inscription')

@section('content')
<form action="{{route('inscription.store')}}" method="POST"  enctype="multipart/form-data">
    @csrf
    <div class="container-fluid">
        <div class="container">
            <!-- Title -->
            <div class="d-flex justify-content-between align-items-lg-center py-3 flex-column flex-lg-row">
                <h2 class="h5 mb-3 mb-lg-0"><a href="#" class="text-muted"><i class="bi bi-arrow-left-square me-2"></i>Inscription</a> </h2>
            </div>
            <!-- Main content -->
            <div class="row">
                <!-- Left side -->
                <div class="col-lg-8">
                    <!-- Basic information -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="h6 mb-4">Basic information</h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Prénom</label>
                                        <input type="text" class="form-control" name="firstname" value="{{$user->firstname}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Nom</label>
                                        <input type="text" class="form-control" name="name" value="{{$user->name}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">E-mail</label>
                                        <input type="email" class="form-control" name="email" value="{{$user->email}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Téléphone</label>
                                        <input type="text" class="form-control" name="phoneNumber" value="{{$user->phoneNumber}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Address -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="h6 mb-4">Adresse</h3>
                            <div class="mb-3">
                                <label class="form-label">Rue</label>
                                <input type="text" class="form-control" name="addressStreet" value="{{$user->addressStreet}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Numéro</label>
                                <input type="text" class="form-control" name="addressNumber" value="{{$user->addressNumber}}">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Commune/CP</label>
                                        <select id="postal_code_localite" class="form-select SelectCpLocalite" name="postal_code_localite"></select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Pays</label>
                                        <input type="text" class="form-control" readonly value="Belgique">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4" id="contentFormSpe">
                        <div class="card-body">
                            <div class="mb-3 row" id="formBabysitter" >

                            </div>
                            <div class="col-md-8 row mt-4 md-4" id="formParent" >


                            </div>
                            <div class="col-md-8 row mt-4 md-4" id="formChildren" >

                            </div>
                        </div>
                    </div>

                </div>
                <!-- Right side -->
                <div class="col-lg-4">
                    <!-- Status -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="h6">Role</h3>
                            <select class="form-select" name="role" id="role">
                                <option value=" " selected="">Choisir un role</option>
                                <option value="lesDeux">Les deux </option>
                                <option value="parent">Parent</option>
                                <option value="babysitter">Baby-sitter</option>
                            </select>
                        </div>
                    </div>
                    <!-- Avatar -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="h6">Avatar</h3>
                            <label for="files[]" class="form-label">Photo profil:</label>
                            <input type="file" id="file" class="form-control" name="files[]" step="0.01" value="" required>
                        </div>
                    </div>
                    <!-- Notes -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="h6">Description</h3>
                            <textarea class="form-control" name="description" rows="3"></textarea>
                        </div>
                        <div class="card-body" id="fromDescriptionParent">

                        </div>
                    </div>
                    <button type="submit" class="btn thirdColor" >Enregistrer</button>
                    <a href="{{route('user.destroy', $user->id)}}" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir annuler ?')">Annuler</a>
                </div>
            </div>
        </div>
    </div>

</form>

    @include('shared.footer')
@endsection
