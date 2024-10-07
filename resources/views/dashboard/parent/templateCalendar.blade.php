<main id="templateCalendar">
    <div class="container-fluid px-4">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Liste des évènement programmés
            </div>
            <div class="card-body">
                <table id="datatablesSimple"  class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titre</th>
                        <th>Date de début</th>
                        <th>Date de fin</th>
                        <th>Heure de début</th>
                        <th>Heure de fin</th>
                        <th>Emplacement</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Titre</th>
                        <th>Date de début</th>
                        <th>Date de fin</th>
                        <th>Heure de début</th>
                        <th>Heure de fin</th>
                        <th>Emplacement</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody id="tbodyListCriteria">
                    @foreach($events as $event)

                        <tr>
                            <th scope="row">{{$event->id}}</th>
                            <td>{{$event->title}}</td>
                            <td>{{Carbon\Carbon::parse($event->start)->format('d-m-Y')}}</td>
                            <td>{{Carbon\Carbon::parse($event->end)->format('d-m-Y')}}</td>
                            <td>{{Carbon\Carbon::parse($event->time_start)->format('H:i')}}</td>
                            <td>{{Carbon\Carbon::parse($event->time_end)->format('H:i')}}</td>
                            <td>{{$event->emplacement}}</td>
                            <td>
                                <a href="{{route('event.edit', $event->id)}}" class="btn btn-warning"><i class="fa-solid fa-pen"></i></a>
                                <a href="{{route('event.destroy', $event->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
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

