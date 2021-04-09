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

    public $autocompleteParams;

    public $placeDetailsParams;

    private $sessionToken;

    public function mount()
    {
        $this->query = '';
        $this->results = null;
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
        $placeDetails = app()->make(\SKAgarwal\GoogleApi\PlacesApi::class)->placeDetails($placeId, $this->placeDetailsParams);
        // Billing session ends when placeDetails request is made, reset Session Token
        $this->sessionToken = (string) Str::uuid();
        
        $addressLine1 = '';
        $zip = '';
        $city = '';
        $state = '';
        $addressComponents = $placeDetails->get('result')->get('address_components');
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

    public function updatedQuery()
    {
        $resultsCollection = app()->make(\SKAgarwal\GoogleApi\PlacesApi::class)->placeAutocomplete($this->query, $this->autocompleteParams);
        $this->results = $resultsCollection['predictions'];
        // $resultsCollection['status'] is handled by SKAgarwal/PlacesApi package
        // https://github.com/SachinAgarwal1337/google-places-api/blob/2f2b474b706e362778c5642ac1524619afda9126/src/PlacesApi.php#L240
    }

    public function render()
    {
        return view('addresses::livewire.domestic-address-search-bar');
    }
}
