<main id="templateForum">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Mes sujets </h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Liste des sujets créés
            </div>
            <div class="card-body">
                <table id="datatablesSimple"  class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titre</th>
                        <th>Catégorie</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Titre</th>
                        <th>Catégorie</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody id="tbodyListCriteria">
                    @foreach($questions as $question)

                        <tr>
                            <th scope="row">{{$question->id}}</th>
                            <td>{{$question->title}}</td>
                            <td>{{$question->category->name}}</td>
                            <td>
                                <a href="{{route('forum.show', $question->id)}}" class="btn thirdColor"><i class="fa-solid fa-eye"></i></a>
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
