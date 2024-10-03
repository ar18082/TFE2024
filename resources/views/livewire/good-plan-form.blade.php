<div>
    <form wire:submit.prevent="submit" >
        <input type="hidden" value="1">
        {{ $this->form }}

        <div class="mt-4">
            <button type="submit" class="btn btn-primary">
                Enregistrer
            </button>
        </div>
    </form>
</div>
