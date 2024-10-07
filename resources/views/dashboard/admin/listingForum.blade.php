<main id="listingForum">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Forum</h1>
        <div class="row">
            <div class="col-xl-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-area me-1"></i>
                        Nombre de sujets / catégories
                    </div>
                    <div class="card-body"><canvas id="nbrSubjects" width="100%" height="40"></canvas></div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Liste des sujets
            </div>
            <div class="card-body">
                <table id="datatablesSimple"  class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titre</th>
                        <th>Catégorie</th>
                        <th>Date </th>
                        <th>Nombre de réponses </th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Titre</th>
                        <th>Catégorie</th>
                        <th>Date </th>
                        <th>Nombre de réponses </th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody id="tbodyListForum">
                    @foreach($forum as $sujet)
                        <tr>
                            <th scope="row">{{$sujet->id}}</th>
                            <td>{{$sujet->title}}</td>
                            <td>{{$sujet->category->name}}</td>
                            <td>{{\Carbon\Carbon::parse($sujet->created_at)->format('d-m-Y')}}</td>
                            <td>{{count($sujet->responses)}}</td>
                            <td>
                                <a href="{{route('forum.show', $sujet->id)}}" class="btn thirdColor"><i class="fa-solid fa-eye"></i></a>
                                <a href="{{route('forum.edit', $sujet->id)}}" class="btn btn-warning"><i class="fa-solid fa-pen"></i></a>
                                <a href="{{route('forum.destroy', $sujet->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</main>
