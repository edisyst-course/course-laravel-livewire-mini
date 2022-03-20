<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Country;
use Livewire\Component;

class Dropdowns extends Component
{
    public $countries; // la lista intera
    public $cities;

    public $country; // l'elemento selezionato al momento
    public $city;

    public function mount()
    {
        $this->countries = Country::all(); // collection coi dati
        $this->cities = collect();         // collection vuota
    }

    public function render()
    {
        return view('livewire.dropdowns');
    }

    // si aggiorna all'update dell'elemento wire:model="country"
    public function updatedCountry($value)
    {
        $this->cities = City::where('country_id', $value)->get();
        $this->city = $this->cities->first()->id;
    }
}
