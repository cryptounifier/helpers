<?php

namespace CryptoUnifier\Helpers;

use Illuminate\Database\Eloquent\Factories\Factory;

class IpAddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ip_address'   => $this->faker->ipv4(),
            'asn'          => $this->faker->randomNumber(4, true),
            'continent'    => 'world',
            'country'      => $this->faker->country(),
            'country_code' => $this->faker->countryCode(),
            'region'       => $this->faker->state(),
            'region_code'  => $this->faker->stateAbbr(),
            'city'         => $this->faker->city(),
            'latitude'     => $this->faker->latitude(),
            'longitude'    => $this->faker->longitude(),
            'risk'         => $this->faker->randomNumber(2),
            'proxy'        => $this->faker->boolean(),
            'driver'       => 'factory',
        ];
    }
}
