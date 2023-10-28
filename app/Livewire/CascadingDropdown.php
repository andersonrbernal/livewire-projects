<?php

namespace App\Livewire;

use App\Models\Continent;
use App\Models\Country;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class CascadingDropdown extends Component
{
    /**
     * @var Continent[] $continents;
     */
    public $continents = [];
    /**
     * @var Country[] $continents;
     */
    public $countries = [];

    public string $selectedContinent;
    public string $selectedCountry;

    public function mount(): void
    {
        $this->continents = Continent::all();
    }

    public function render(): View
    {
        return view('livewire.cascading-dropdown');
    }

    public function changeContinent(): void
    {
        if ($this->selectedContinent !== '-1') {
            $this->countries = Country::where('continent_id', $this->selectedContinent)->get();
        }
    }
}
