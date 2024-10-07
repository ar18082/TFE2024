<div class="container">

    <form action="{{route('event.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="custody_criteria" class="form-label">Titre</label>
            <input type="text" id="title" name="title" class="form-control">

        </div>

        <div class="form-group">
            <label for="start" class="form-label">Date de début</label>
            <input type="date" id="start" name="start" class="form-control">

        </div>
        <div class="form-group">
            <label for="time_start" class="form-label">Heure de début</label>
            <input type="time" id="time_start" name="time_start" class="form-control">

        </div>

        <div class="form-group">
            <label for="end" class="form-label">Date de fin</label>
            <input type="date" id="end" name="end" class="form-control">

        </div>
        <div class="form-group">
            <label for="time_end" class="form-label">Heure de fin</label>
            <input type="time" id="time_end" name="time_end" class="form-control">

        </div>
        <div class="form-group">
            <label for="emplacement" class="form-label">Emplacement</label>
            <input type="text" id="emplacement" name="emplacement" class="form-control">

        </div>
        <div class="form-group mt-4">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </form>
</div>
