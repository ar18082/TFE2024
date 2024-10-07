<main id="templateFavorite">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Mes Favoris</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Liste de mes favoris
            </div>
            <div class="card-body">
            @foreach($favorites as $user->babysitterUser)
                @include('user.index')
            @endforeach
            </div>
        </div>
    </div>
</main>
