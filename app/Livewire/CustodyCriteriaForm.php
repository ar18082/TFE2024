<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Custody_criteria;

class CustodyCriteriaForm extends Component
{
    public $custody_criteria;
    public $description;
    public $valide = false;

    protected $rules = [
        'custody_criteria' => 'required|string|max:255',
        'description' => 'required|string',
        'valide' => 'boolean',
    ];

    public function submit()
    {
        $this->validate();

        Custody_criteria::create([
            'custody_criteria' => $this->custody_criteria,
            'description' => $this->description,
            'valide' => $this->valide,
        ]);

        session()->flash('message', 'Custody criteria created successfully.');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.custody-criteria-form');
    }
}
