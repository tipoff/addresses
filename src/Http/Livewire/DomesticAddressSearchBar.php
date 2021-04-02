<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Http\Livewire;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Livewire\Component;

class DomesticAddressSearchBar extends Component
{
    public $query;

    public $results;

    private $placesApi;

    public $autocompleteParams;

    public $placeDetailsParams;

    private $sessionToken;

    public function mount()
    {
        $this->query = '';
        $this->results = [];
        $this->placesApi = app()->make(\SKAgarwal\GoogleApi\PlacesApi::class);
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
        
        $addressLine1 = '';
        $zip = '';
        $city = '';
        $state = '';
        $addressComponents = $placeDetails->result->address_components;
        foreach ($addressComponents as $component) {
            switch ($component->types[0]) {
                case 'street_number':
                    $addressLine1 = $component->long_name;

                    break;
                // street name, e.g. Main Street
                case 'route':
                    $addressLine1 += ' ' . $component->short_name;

                    break;
                case 'postal_code':
                    $zip = $component->long_name;

                    break;
                case 'locality':
                    $city = $component->long_name;

                    break;
                // state
                case 'administrative_area_level_1':
                    $state = $component->short_name;

                    break;
            }
        }

        $this->emit('returnPlaceDetails', $addressLine1, $zip, $city, $state);
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
        return view('addresses::livewire.domestic-address-search-bar');
    }
}
