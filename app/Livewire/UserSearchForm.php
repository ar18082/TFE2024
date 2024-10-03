<?php

namespace App\Livewire;

use App\Models\PostalCode_Localite;
use Filament\Forms\Components\Select;
use Livewire\Component;
use Filament\Forms;
use App\Models\User;
use Filament\Forms\Components\TextInput;

class UserSearchForm extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    public $name;
    public $postal_code_localite_id;
    public $searchResults = [];

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('name')
                ->label('Name')
                ->placeholder('Enter name')
                ->extraAttributes(['class' => 'form-control mb-3']),

            Select::make('postal_code_localite_id')
                ->options(PostalCode_Localite::all()->pluck('postCode', 'id'))
                ->label('Code Postal')
                ->placeholder('Enter postal code')
                ->extraAttributes(['class' => 'form-select mb-3']),

        ];
    }

    public function submit()
    {
        $this->validate();


        $this->searchResults = User::with('postal_code_localite', 'babySitterUser', 'image')
            ->where('babysitter_user_id', '!=', null)
            ->where('name', 'like', '%' . $this->name . '%')
            ->where('postal_code_localite_id', $this->postal_code_localite_id)
            ->get();



    }

    public function render()
    {

        return view('livewire.user-search-form', [
            'searchResults' => $this->searchResults,
        ]);

    }
}
