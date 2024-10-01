{{--<div>--}}
{{--    <form wire:submit.prevent="submit">--}}
{{--        {{ $this->form }}--}}

{{--        <div class="mt-4">--}}
{{--            <button type="submit" class="btn btn-primary">--}}
{{--                Rechercher--}}
{{--            </button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--    @if (!empty($searchResults))--}}
{{--        <div class="mt-4">--}}
{{--            <h3>Search Results:</h3>--}}
{{--            <ul>--}}
{{--                @foreach ($searchResults as $user)--}}

{{--                    <li>@include('user.index')</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}

{{--</div>--}}


<div class="containerFormSearch col-6">
    <br/>
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            <form class="card card-sm" wire:submit.prevent="submit">
                <div class="card-body row no-gutters align-items-center search_body">
                    <div class="col-auto">
                        <i class="fas fa-search h4 text-body"></i>
                    </div>
                    <!--end of col-->
                    <div class="col">
                        {{ $this->form }}
                    </div>
                    <!--end of col-->
                    <div class="col-auto">
                        <button class="btn btn-lg colorFour" type="submit">Search</button>
                    </div>

                </div>
            </form>
        </div>
            @if (!empty($searchResults))
                <div class="mt-4">
                    <h3>Search Results:</h3>

                        @foreach ($searchResults as $user)
                           @include('user.index')
                        @endforeach

                </div>
            @endif
    </div>
</div>
