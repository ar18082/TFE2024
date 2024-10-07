<div class="main-body" id="templateUser">
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="{{asset($user->image[0]->url)}}" alt="Admin" class="rounded-circle p-1 thirdColor" width="110">
                        <div class="mt-3">
                            <h4>{{$user->firstname . ' ' . $user->name}} </h4>
                            <p class="text-muted font-size-sm">{{$user->postal_code_localite->postCode. ' ' .$user->postal_code_localite->localite}}</p>
                            <button class="btn thirdColor">Message</button>
                        </div>
                    </div>
                    <hr class="my-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><i class="fa-brands fa-facebook"></i> <i class="fa-brands fa-instagram"></i> </h6>
                            <a href="{{$user->babysitterUser->social_network ?? ''}}" class="text-secondary">{{$user->babysitterUser->social_network ?? ''}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-sm-3 inputEditUser">
                            <h6 class="mb-0">Nom</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="hidden" class="form-control" name="name" value="{{$user->name}}">
                            <input type="hidden" class="form-control" name="user_id" value="{{$user->id}}">
                        </div>
                    </div>
                    <div class="row mb-3 ">
                        <div class="col-sm-3 inputEditUser">
                            <h6 class="mb-0">Prénom</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                           <input type="hidden" class="form-control" name="fistname" value="{{$user->firstname}}">

                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="hidden" class="form-control " name="email" value="{{$user->email}}">
                            <h6 class="valueUser">{{$user->email}}</h6>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Téléphone</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <input type="hidden" class="form-control " name="phoneNumber" value="{{$user->phoneNumber}}">
                            <h6  class="valueUser">{{$user->phoneNumber}}</h6>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Rue</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="hidden" class="form-control " name="addressStreet" value="{{$user->addressStreet}}">
                            <h6  class="valueUser">{{$user->addressStreet}}</h6>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Numéro</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                           <input type="hidden" class="form-control " name="addressNumber" value="{{$user->addressNumber}}">
                            <h6  class="valueUser">{{$user->addressNumber}}</h6>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3 inputEditUser">
                            <h6 class="mb-0">Cp / commune</h6>
                        </div>
                        <div class="col-sm-9 text-secondary" id="userSelect">
                            <select id="postal_code_localite" class="form-control SelectCpLocalite" name="postal_code_localite" style="width: 100%;">
                                <option value="{{$user->postal_code_localite->id}}">{{$user->postal_code_localite->postCode . ' ' . $user->postal_code_localite->localite}}</option>

                            </select>
                        </div>
                    </div>
                    @if($user->babySitterUser != null)
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Price</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                           <input type="hidden" class="form-control " name="price" value="{{$user->babySitterUser->price ?? ''}}">
                            <h6  class="valueUser">{{$user->babySitterUser->price ?? ''}} €</h6>
                        </div>
                    </div>
                    @endif
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Description</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                           <textarea class="form-control" id="userTexArea" name="description">
                                @if($user->babySitterUser != null)
                                    {{$user->babySitterUser->description}}
                               @elseif($user->parentUser != null)
                                    {{$user->parentUser->description}}
                               @endif
                           </textarea>
                            <h6 class="valueUser">
                                @if($user->babySitterUser != null)
                                    {{$user->babySitterUser->description}}
                                @elseif($user->parentUser != null)
                                    {{$user->parentUser->description}}
                                @endif
                            </h6>
                        </div>
                    </div>
                    <div class="row" id="btnEditSubmitUser">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9 text-secondary">
                            <button type="button" class="btn colorFour px-4" id="btnSubmitUser">Sauvegarder</button>
                            <button type="button" class="btn thirdColor px-4" id="btnEditUser">Modifier</button>
                        </div>
                    </div>
                </div>
            </div>

            @if($user->babysitter_user_id)
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="d-flex align-items-center mb-3">Critères de garde</h5>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        @foreach($user->custodyCriteria as $criteria)
                                            <h6 class="mb-0">{{$criteria->custody_criteria}}</h6>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($user->parent_user_id)
                <div class="row mt-4">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h6>Les enfants </h6>
                            </div>
                            <table id="datatablesSimple"  class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Prénom</th>
                                    <th>nom</th>
                                    <th>Date de naissance</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Prénom</th>
                                    <th>nom</th>
                                    <th>Date de naissance</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($children as $child)

                                    <tr>
                                        <th scope="row">{{$child->firstname}}</th>
                                        <td>{{$child->name}}</td>
                                        <td>{{$child->Date_of_birth}}</td>
                                        <td>
                                            <a href="{{route('children.show', $child->id)}}" class="btn thirdColor"><i class="fa-solid fa-eye"></i></a>
                                            <a href="{{route('children.edit', $child->id)}}" class="btn btn-warning"><i class="fa-solid fa-pen"></i></a>
                                            <a href="{{route('children.destroy', $child->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
