<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Http\Livewire;

use Livewire\Component;
use SKAgarwal\GoogleApi\PlacesApi;

class DomesticAddressSearchBar extends Component
{
    public $query;

    public $results;

    private $placesApi;

    public $params;

    private $sessionToken;

    public function mount(PlacesApi $placesApi)
    {
        $this->query = '';
        $this->results = [];
        $this->placesApi = $placesApi;
        $this->sessionToken = (string) Str::uuid();
        // restrict results to 'address' type only in US
        $this->params = [
            'sessiontoken' => $this->sessionToken,
            'components' => 'country:us',
            'types' => 'address',
        ];
    }

    public function setQuery(string $query)
    {
        $this->query = $query;
    }

    public function updatedQuery()
    {
        $this->results = $this->placesApi->placeAutocomplete($this->query, $this->params);
    }

    public function render()
    {
        return view('livewire.domestic-address-search-bar');
    }
}
