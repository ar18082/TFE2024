<main id="templateComment">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Mes commentaires </h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Liste des commentaires
            </div>
            <div class="card-body">
                <table id="datatablesSimple"  class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Contenu</th>
                        <th>Note</th>
                        <th>Auteur</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Contenu</th>
                        <th>Note</th>
                        <th>Auteur</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody id="">
                    @foreach($comments as $comment)

                        <tr>
                            <th scope="row">{{$comment->id}}</th>
                            <td>{{$comment->content}}</td>
                            <td>{{$comment->note}}</td>
                            <td><a href="{{route('user.show', $comment->babysitter_user_id)}}">{{$comment->baysitterUser->firstname . ' ' . $comment->baysitterUser->name }}</a></td>
                            <td>
                                <a href="{{route('forum.show', $comment->id)}}" class="btn thirdColor"><i class="fa-solid fa-eye"></i></a>
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
