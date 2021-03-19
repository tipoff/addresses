<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Http\Livewire;

use SKAgarwal\GoogleApi\PlacesApi;
use Livewire\Component;

class DomesticAddressSearchBar extends Component
{
    public $query;

    public $contacts;

    public $placesApi;

    public $params;

    public function mount(PlacesApi $placesApi)
    {
        $this->query = '';
        $this->contacts = [];
        $this->placesApi = $placesApi;
        // restrict contacts to 'address' type only 
        $this->params = [
            'types' => 'address',
        ];
    }

    public function setQuery(string $query)
    {
        $this->query = $query;
    }

    public function updatedQuery()
    {
        $this->contacts = $this->placesApi->placeAutocomplete($this->query, $this->params);
    }

    public function render()
    {
        return view('livewire.domestic-address-search-bar');
    }
}