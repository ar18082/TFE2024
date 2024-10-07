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
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter me-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                            <span class="text-secondary">@bootdey</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram me-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                            <span class="text-secondary">bootdey</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                            <span class="text-secondary">bootdey</span>
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
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Price</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                           <input type="hidden" class="form-control " name="price" value="{{$user->babySitterUser->price ?? ''}}">
                            <h6  class="valueUser">{{$user->babySitterUser->price ?? ''}} €</h6>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Description</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                           <textarea class="form-control" id="userTexArea" name="description">{{$user->babySitterUser->description ?? ''}}</textarea>
                            <h6  class="valueUser">{{$user->babySitterUser->description ?? ''}}</h6>
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
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="d-flex align-items-center mb-3">Activités</h5>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        @foreach($activities as $activity)
                                            <h6 class="mb-0">{{$activity->title}}</h6>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="d-flex align-items-center mb-3">Commentaires</h5>
                                <div class="col-sm-3">
                                    @foreach($user->babySitterUser->comments as $comment)
                                        <div class="col-sm-3" >
                                            <h6 class="mb-0">{{$comment->content}}</h6>
                                            <h6 class="mb-0">{{$comment->note}}</h6>
                                        </div>

                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
