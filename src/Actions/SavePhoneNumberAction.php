<?php namespace Tipoff\Addresses\Actions;

use libphonenumber\PhoneNumberUtil;
use Tipoff\Addresses\Models\CountryCallingcode;
use Tipoff\Addresses\Models\Phone;
use Tipoff\Addresses\Models\PhoneArea;

class SavePhoneNumberAction
{
    /**
     * @param string $phoneNumber
     * @return mixed
     * @throws \libphonenumber\NumberParseException
     */
    public function execute(string $phoneNumber)
    {
        $phoneUtil = PhoneNumberUtil::getInstance();

        $parsedPhoneNumber = $phoneUtil->parse($phoneNumber, 'US');
        $parsedCountryCallingcode = $parsedPhoneNumber->getCountryCode();
        /**
         * Only save US phone number.
         * https://github.com/tipoff/addresses/issues/73
         */
        if ($parsedCountryCallingcode !== 1) {
            throw new \Exception('Please enter an US phone number!');
        }
        $countryCallingcode = CountryCallingcode::where('code', $parsedCountryCallingcode)->first();
        $parsedAreaCode = $this->getAreaCode($parsedPhoneNumber->getNationalNumber());
        $phoneArea = PhoneArea::find($parsedAreaCode);
        if (! $phoneArea) {
            throw new \Exception('Please enter a valid US area code.');
        }

        return optional($countryCallingcode)->phones()->firstOrCreate([
            'full_number' => $countryCallingcode->code . $phoneNumber,
            'phone_area_code' => $phoneArea->code, // This only work for US area code.
        ]);
    }

    /**
     * @param string $phoneNumber
     * @return string
     */
    private function getAreaCode(string $phoneNumber)
    {
        return substr($phoneNumber, 0, 3);
    }
}
