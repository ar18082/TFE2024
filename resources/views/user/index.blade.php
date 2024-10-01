<div class="container">
    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
        <div class="col">
            <div class="card radius-15">
                <div class="card-body text-center">
                    <div class="p-4 border radius-15">
                        <img src="{{asset($user->image[0]->url)}}" width="110" height="110" class="rounded-circle shadow" alt="">
                        <h5 class="mb-0 mt-5">{{$user->firstname . ' ' . $user->name}}</h5>
                        <p class="mb-3">{{$user->postal_code_localite->postCode. ' ' .$user->postal_code_localite->localite}}</p>
                        <div class="list-inline contacts-social mt-3 mb-3"> <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="bx bxl-facebook"></i></a>
                            <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="bx bxl-twitter"></i></a>
                            <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="bx bxl-linkedin"></i></a>
                        </div>
                        <div class="d-grid"> <a href="{{route('user.show', $user->id)}}" class="btn colorFour radius-15">Détail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
