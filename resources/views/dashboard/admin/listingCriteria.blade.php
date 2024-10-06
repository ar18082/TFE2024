<main id="listingCriteria">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Critères de garde</h1>
        <div class="row">
            <div class="col-xl-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-area me-1"></i>
                        Graphique des critères de garde
                    </div>
                    <div class="card-body"><canvas id="criteriaChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Liste des critères de garde
            </div>
            <div class="card-body">
                <table id="datatablesSimple"  class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titre</th>
                        <th>valide</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Titre</th>
                        <th>valide</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody id="tbodyListCriteria">
                    @foreach($criterias as $criteria)

                        <tr>
                            <th scope="row">{{$criteria->id}}</th>
                            <td>{{$criteria->custody_criteria}}</td>
                            <td>{{$criteria->valide}}</td>
                            <td>
                                <a href="{{route('custodyCriteria.show', $criteria->id)}}" class="btn thirdColor"><i class="fa-solid fa-eye"></i></a>
                                <a href="{{route('custodyCriteria.edit', $criteria->id)}}" class="btn btn-warning"><i class="fa-solid fa-pen"></i></a>
                                <a href="{{route('custodyCriteria.destroy', $criteria->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div id=""></div>
            </div>

            {{--            {{ $users->links('vendor.pagination.bootstrap-4') }}--}}
        </div>
    </div>
</main>
