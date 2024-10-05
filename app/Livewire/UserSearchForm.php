<?php

namespace App\Livewire;

use App\Models\BabysitterCustody;
use App\Models\Custody_criteria;
use App\Models\PostalCode_Localite;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\Select;
use Filament\Tables\Filters\SelectFilter;
use Livewire\Component;
use Filament\Forms;
use App\Models\User;
use Filament\Forms\Components\TextInput;
use Livewire\WithPagination;

class UserSearchForm extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;
    use WithPagination;

    public $name;
    public $selectedCriteria = [];
    public $postal_code_localite_id;
    public $searchResults = [];

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('name')
                ->label('Name')
                ->placeholder('Enter name')
                ->extraAttributes(['class' => 'form-control mb-3']),

            CheckboxList::make('selectedCriteria')
                ->label('Critère de garde')
                ->options(Custody_criteria::all()->mapWithKeys(function ($item) {
                    return [$item->id => $item->custody_criteria];
                })),

            Select::make('postal_code_localite_id')
                ->options(PostalCode_Localite::all()->mapWithKeys(function ($item) {
                    return [$item->id => $item->postCode . ' - ' . $item->localite];
                }))

                ->label('Code Postal')
                ->placeholder('Enter postal code')
                ->extraAttributes(['class' => 'form-select mb-3']),

        ];
    }

    public function submit()
    {
        $this->validate();


//        $this->searchResults = User::with('postal_code_localite', 'babySitterUser', 'image')
//            ->where('babysitter_user_id', '!=', null)
//            ->where('name', 'like', '%' . $this->name . '%')
//            ->where('postal_code_localite_id', $this->postal_code_localite_id)
//            ->paginate(5);

        session()->put([
            'name' => $this->name,
            'codePost' => $this->postal_code_localite_id,
            'selectedCriteria' => $this->selectedCriteria,
        ]);
        return redirect()->route('searchForm');
    }

//    public function getSearchResultsProperty()
//    {
//        return User::with('postal_code_localite', 'babySitterUser', 'image')
//            ->where('babysitter_user_id', '!=', null)
//            ->when($this->name, function ($query) {
//                $query->where('name', 'like', '%' . $this->name . '%');
//            })
//            ->when($this->postal_code_localite_id, function ($query) {
//                $query->where('postal_code_localite_id', $this->postal_code_localite_id);
//            })
//            ->get();
//    }

    public function render()
    {

        return view('livewire.user-search-form', [
            'searchResults' => $this->searchResults,
        ]);

    }
}
