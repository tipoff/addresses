<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Http\Livewire;

use Livewire\Component;
use SKAgarwal\GoogleApi\PlacesApi;
use Illuminate\Support\Collection;

class DomesticAddressSearchBar extends Component
{
    public $query;

    public $results;

    private $placesApi;

    public $autocompleteParams;

    public $placeDetailsParams;

    private $sessionToken;

    public function mount(PlacesApi $placesApi)
    {
        $this->query = '';
        $this->results = [];
        $this->placesApi = $placesApi;
        $this->sessionToken = (string) Str::uuid();
        // restrict results to 'address' type only in US
        $this->autocompleteParams = [
            'sessiontoken' => $this->sessionToken,
            'components' => 'country:us',
            'types' => 'address',
        ];
        $this->placeDetailsParams = [
            'sessiontoken' => $this->sessionToken,
            // can retrieve more fields if needed for data consistency e.g. timezone
            'fields' => 'address_component',
        ];
    }

    public function getPlaceDetails(string $placeId)
    {
        $placeDetails = $this->placesApi->placeDetails($placeId, $this->placeDetailsParams);
        // Billing session ends when placeDetails request is made, reset Session Token
        $this->sessionToken = (string) Str::uuid();
        $this->emit('returnPlaceDetails', $placeDetails);
    }

    public function selectResult(Collection $result)
    {
        $placeId = $result->place_id;
        $this->getPlaceDetails($placeId);
    }

    public function updatedQuery()
    {
        $this->results = $this->placesApi->placeAutocomplete($this->query, $this->autocompleteParams);
    }

    public function render()
    {
        return view('livewire.domestic-address-search-bar');
    }
}
