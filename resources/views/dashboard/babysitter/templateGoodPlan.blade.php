<main id="templateGoodPlan">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Mes bons plans</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Liste des bons plans
            </div>
            <div class="card-body">
                <table id="datatablesSimple"  class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titre</th>
                        <th>Date de début </th>
                        <th>Date de fin </th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Titre</th>
                        <th>Date de début </th>
                        <th>Date de fin </th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody id="tbodyListCriteria">
                    @foreach($user->goodPlan as $goodPlan)

                        <tr>
                            <th scope="row">{{$goodPlan->id}}</th>
                            <td>{{$criteria->title}}</td>
                            <td>{{\Carbon\Carbon::parse($criteria->date_start)->format('d-m-Y')}}</td>
                            <td>{{\Carbon\Carbon::parse($criteria->date_end)->format('d-m-Y')}}</td>
                            <td>
                                <a href="{{route('goodPlan.show', $goodPlan->id)}}" class="btn thirdColor"><i class="fa-solid fa-eye"></i></a>
                                <a href="{{route('goodPlan.edit', $goodPlan->id)}}" class="btn btn-warning"><i class="fa-solid fa-pen"></i></a>
                                <a href="{{route('goodPlan.destroy', $goodPlan->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div id=""></div>
            </div>
        </div>
    </div>
</main>
