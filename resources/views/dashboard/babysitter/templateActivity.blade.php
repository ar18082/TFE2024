<main id="templateActivity">
    <div class="container-fluid px-4">
        <h1 class="mt-4"> Mes activités</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Liste des activités
            </div>
            <div class="card-body">
                <table id="datatablesSimple"  class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titre</th>
                        <th>Prix</th>
                        <th>Date </th>
                        <th>Nombre de places </th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Titre</th>
                        <th>Prix</th>
                        <th>Date </th>
                        <th>Nombre de places </th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody id="tbodyListActivities">
                    @foreach($activities as $activity)
                        <tr>
                            <th scope="row">{{$activity->id}}</th>
                            <td>{{$activity->title}}</td>
                            <td>{{$activity->price}}</td>
                            <td>{{\Carbon\Carbon::parse($activity->date_activity)->format('d-m-Y')}}</td>
                            <td>{{$activity->nbr_children}}</td>
                            <td>
                                <a href="{{route('activity.show', $activity->id)}}" class="btn thirdColor"><i class="fa-solid fa-eye"></i></a>
                                <a href="{{route('activity.edit', $activity->id)}}" class="btn btn-warning"><i class="fa-solid fa-pen"></i></a>
                                <a href="{{route('activity.destroy', $activity->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</main>
