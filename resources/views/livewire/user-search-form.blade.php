<div>
    <form wire:submit.prevent="submit">
        {{ $this->form }}

        <div class="mt-4">
            <button type="submit" class="btn btn-primary">
                Rechercher
            </button>
        </div>
    </form>
    @if (!empty($searchResults))
        <div class="mt-4">
            <h3>Search Results:</h3>
            <ul>
                @foreach ($searchResults as $user)

                    <li>@include('user.index')</li>
                @endforeach
            </ul>
        </div>
    @endif

</div>
