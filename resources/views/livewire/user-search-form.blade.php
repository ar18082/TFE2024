<div class="containerFormSearch col-6">
    <br/>
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            <form class="card card-sm" wire:submit.prevent="submit" >
                <div class="card-body row no-gutters align-items-center search_body">
                    <div class="col-auto">
                        <i class="fas fa-search h4 text-body"></i>
                    </div>
                    <div class="mb-3">
                        {{ $this->form->getComponent('name') }}
                    </div>
                    <!--end of col-->
                    <div class="col">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                Choisir des critères de garde
                            </button>
                            <ul class="dropdown-menu p-3" aria-labelledby="dropdownMenuButton">
                                <!-- Rendu de la CheckboxList -->
                                @foreach ($this->form->getComponent('selectedCriteria')->getOptions() as $key => $value)
                                    <div class="form-check">
                                        <input wire:model="selectedCriteria" type="checkbox" value="{{ $key }}" id="criteria-{{ $key }}" class="form-check-input">
                                        <label class="form-check-label" for="criteria-{{ $key }}">{{ $value }}</label>
                                    </div>
                                @endforeach
                            </ul>
                        </div>
                        <div class="mb-3">
                            {{ $this->form->getComponent('postal_code_localite_id') }}
                        </div>
                    </div>
                    <!--end of col-->
                    <div class="col-auto">
                        <button class="btn btn-lg colorFour" type="submit">Search</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
