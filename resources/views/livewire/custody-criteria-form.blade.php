<div class="container">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit">
        <div class="form-group">
            <label for="custody_criteria" class="form-label">Critère de garde</label>
            <input type="text" id="custody_criteria" wire:model="custody_criteria" class="form-control">
            @error('custody_criteria') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" wire:model="description" class="form-control"></textarea>
            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        @if(Auth::user())
            <div class="form-group form-check">
                <input type="checkbox" id="valide" wire:model="valide" class="form-check-input">
                <label for="valide" class="form-check-label">Valide</label>
            </div>

        @endif

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
