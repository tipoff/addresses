<?php namespace Tipoff\Addresses\Actions;

use Tipoff\Addresses\Models\City;
use Tipoff\Addresses\Models\Zip;

class SaveDomesticAddressAction
{
    public function execute(array $keys)
    {
        $city = City::where('title', $keys['city'])->first();
        if (! $city) {
            throw new \Exception('City does not exist.');
        }
        $zip = Zip::where('code', $keys['zip'])->first();
        if (! $zip) {
            throw new \Exception('Zip code does not exist.');
        }

        return optional($city)->domesticAddresses()->firstOrCreate([
            'address_line_1' => $keys['address-line-1'],
            'address_line_2' => $keys['address-line-2'],
            'zip_code' => $zip->code,
        ]);
    }
}
