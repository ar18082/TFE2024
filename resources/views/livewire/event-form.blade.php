<div class="container">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit">
        <div class="form-group">
            <label for="custody_criteria" class="form-label">Titre</label>
            <input type="text" id="title" wire:model="title" class="form-control">
            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

       <div class="form-group">
           <label for="start" class="form-label">Date de début</label>
           <input type="date" id="start" wire:model="start" class="form-control">
              @error('start') <span class="text-danger">{{ $message }}</span> @enderror
       </div>
        <div class="form-group">
            <label for="time_start" class="form-label">Heure de début</label>
            <input type="time" id="time_start" wire:model="time_start" class="form-control">
            @error('time_start') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="end" class="form-label">Date de fin</label>
            <input type="date" id="end" wire:model="end" class="form-control">
            @error('end') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="time_end" class="form-label">Heure de fin</label>
            <input type="time" id="time_end" wire:model="time_end" class="form-control">
            @error('time_end') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="emplacement" class="form-label">Emplacement</label>
            <input type="text" id="emplacement" wire:model="emplacement" class="form-control">
            @error('emplacement') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group mt-4">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </form>
</div>
