<?php

namespace App\Livewire;

use App\Models\Activity;
use App\Models\BabysitterUser;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateActivity extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {

        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Titre')
                    ->required(),
                Textarea::make('description')
                    ->label('Description')
                    ->required(),
                TextInput::make('price')
                    ->label('Prix'),
                    //->required(),
                DatePicker::make('date_activity')
                    ->label('Date de l\'activité')
                    ->required(),
                DatePicker::make('visible_start')
                    ->label('Date de début de visibilité')
                    ->required(),
                DatePicker::make('visible_end')
                    ->label('Date de fin de visibilité')
                    ->required(),
                TextInput::make('nbr_children')
                    ->label('Nombre d\'enfants')
                    ->required(),

            ])
            ->statePath('data');
    }

    public function create()
    {
        $data = $this->form->getState();
        $userId = Auth::user()->id ?? null;
        if($userId === null) {
          session()->flash('error', 'Pas d\'utilisateur connecté');
          return redirect()->route('login');
        }else{
            $babysitter_id = BabysitterUser::where('user_id', $userId)->first()->id;
            $activity = new Activity();
            $activity->title = $data['title'];
            $activity->description = $data['description'];
            $activity->price = $data['price'];
            $activity->date_activity = $data['date_activity'];
            $activity->visible_start = $data['visible_start'];
            $activity->visible_end = $data['visible_end'];
            $activity->nbr_children = $data['nbr_children'];
            $activity->babysitter_user_id = $babysitter_id;
            $activity->save();

            session()->flash('success', 'Activité créée avec succès !');
            return redirect()->route('home');
        }
    }



    public function render()
    {
        return view('livewire.create-activity');
    }
}
