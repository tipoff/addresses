<?php

declare(strict_types=1);

namespace Tipoff\Addresses\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Tipoff\Addresses\Models\Address;
use Tipoff\Addresses\Models\DomesticAddress;
use Tipoff\Authorization\Models\User;

class AddressFactory extends Factory
{
    protected $model = Address::class;

    public function definition()
    {
        $user = User::factory()->create();

        return [
            'domestic_address_id' => randomOrCreate(DomesticAddress::class),
            'addressable_type' => get_class($user),
            'addressable_id' => $user->id,
            'type' => $this->faker->randomElement(['shipping', 'billing']),
            'creator_id' => randomOrCreate(app('user')),
            'updater_id' => randomOrCreate(app('user')),
        ];
    }
}
