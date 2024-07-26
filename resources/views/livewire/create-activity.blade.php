<div>
    <form wire:submit.prevent="create">
        {{ $this->form }}

        <button type="submit" class="btn btn-primary mt-3">
            Submit
        </button>
    </form>

    <x-filament-actions::modals />
</div>
