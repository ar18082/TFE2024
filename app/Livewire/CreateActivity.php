<?php

namespace App\Livewire;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;
use App\Models\Activity;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;

class CreateActivity extends Component implements HasForms
{
    use InteractsWithForms;
    public ? array $date = [];

    public function mount(): void
    {
        $this->form->fill();
    }


    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('babysitter_user_id')
                    ->required()
                    ->numeric()
                    ->extraAttributes(['class' => 'form-control']),
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->extraAttributes(['class' => 'form-control']),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull()
                    ->extraAttributes(['class' => 'form-control']),
                Textarea::make('price')
                    ->required()
                    ->columnSpanFull()
                    ->extraAttributes(['class' => 'form-control']),
                DatePicker::make('date_activity')
                    ->required()
                    ->extraAttributes(['class' => 'form-control']),
                DatePicker::make('visible_start')
                    ->required()
                    ->extraAttributes(['class' => 'form-control']),
                DatePicker::make('visible_end')
                    ->required()
                    ->extraAttributes(['class' => 'form-control']),
                TextInput::make('nbr_children')
                    ->required()
                    ->numeric()
                    ->extraAttributes(['class' => 'form-control']),
            ])
            ->statePath('data');
    }

    public function create(): void
    {
        $this->validate();

        Activity::create($this->state);

        $this->emit('saved');

        $this->reset();
    }
    public function render()
    {
        return view('livewire.create-activity');
    }
}

