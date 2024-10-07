<main id="listingAbus">

    <div class="container-fluid px-4">
        <h1 class="mt-4">Abus</h1>
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="card thirdColor text-white mb-4">
                    <div class="card-body">Nombre des signalements d'abus</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <h6>Nombre</h6>
                        <a class="small text-white stretched-link" href="#">Liste</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Nombre utilisateurs sous surveillance</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <h6>Nombre</h6>
                        <a class="small text-white stretched-link" href="#">Liste</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">Nombre utilisateur bannis</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <h6>Nombre</h6>
                        <a class="small text-white stretched-link" href="#">Liste</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Liste User bannis
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
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
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
