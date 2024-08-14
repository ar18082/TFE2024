<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Form;
use Filament\Forms;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Support\Facades\Validator;

class FormInscription extends Component implements HasForms
{
    use Forms\Concerns\InteractsWithForms;

    public $formData = [];

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('name')
                ->label('Nom')
                ->required(),
        ];
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $validatedData = $this->form->getState();

        session()->flash('message', 'Inscription envoyée avec succès!');
    }
    public function render()
    {
        return view('livewire.form-inscription');
    }
}
