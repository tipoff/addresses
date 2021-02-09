<?php namespace Tipoff\Addresses\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Tipoff\Addresses\Models\Customer;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'      => randomOrCreate(app('user')),
            'company'      => $this->faker->company,
            'address'      => $this->faker->address,
            'city'         => $this->faker->city,
            'state'        => $this->faker->stateAbbr,
            'zip'          => $this->faker->postcode,
            'timezone'     => $this->faker->timezone,
            'source'       => $this->faker->word,
            'phone_number' => $this->faker->phoneNumber,
        ];
    }
}
