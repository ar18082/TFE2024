<h2>Listing Utilisateurs</h2>
<form class="d-flex">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn colorFour" type="submit">Search</button>
</form>
<div class="table-responsive">
    <div class="">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">e-mail</th>
                <th scope="col">Code postal</th>
                <th scope="col">Ville</th>
                <th scope="col">Action</th>

            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)

            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->firstname}}</td>
                <td>{{$user->email}}</td>
                <td>{{ $user->postal_code_localite ? $user->postal_code_localite->postCode : 'N/A' }}</td>
                <td>{{ $user->postal_code_localite ? $user->postal_code_localite->localite : 'N/A' }}</td>
                <td>
                    <a href="{{route('user.show', $user->id)}}" class="btn thirdColor"><i class="fa-solid fa-eye"></i></a>
                    <a href="" class="btn btn-warning"><i class="fa-solid fa-pen"></i></a>
                    <form action="" method="POST" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach

            </tbody>
        </table>

        {{ $users->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>

