<main id="listingUser">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Utilisateurs</h1>
        <div class="row">
            <div class="col-xl-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-area me-1"></i>
                        Nombre de Baby-sitters
                    </div>
                    <div class="card-body"><canvas id="babysitterChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                        Nombre de parents
                    </div>
                    <div class="card-body"><canvas id="parentChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                        Nombre d'enfants
                    </div>
                    <div class="card-body"><canvas id="childrenChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
        </div>
        <div class="card mb-4 ">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Liste des utilisateurs
            </div>
            <div class="card-body">
                <table id="datatablesSimple"  class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>E-mail</th>
                        <th>Code Postal</th>
                        <th>Commune</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>E-mail</th>
                        <th>Code Postal</th>
                        <th>Commune</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody id="tbodyListingUser">
                    @foreach($users as $user)

                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->firstname}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{ $user->postal_code_localite ? $user->postal_code_localite->postCode : 'N/A' }}</td>
                            <td>{{ $user->postal_code_localite ? $user->postal_code_localite->localite : 'N/A' }}</td>
                            <td>{{ $user->role ?? 'N/A' }}</td>
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
    </div>
</main>



{{--        {{ $users->links('vendor.pagination.bootstrap-4') }}--}}

