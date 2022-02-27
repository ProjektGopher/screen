<?php

namespace Database\Factories;

use App\Enums\LicenseTypes;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\License>
 */
class LicenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'team_id' => Team::random(),
        ];
    }

    /**
     * Indicate that the license is monthly.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function monthly()
    {
        return $this->state(function (array $attributes) {
            return [
                'type' => LicenseTypes::MONTHLY,
            ];
        });
    }

    /**
     * Indicate that the license is yearly.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function yearly()
    {
        return $this->state(function (array $attributes) {
            return [
                'type' => LicenseTypes::YEARLY,
            ];
        });
    }

    /**
     * Indicate that the license is lifetime.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function lifetime()
    {
        return $this->state(function (array $attributes) {
            return [
                'type' => LicenseTypes::LIFETIME,
            ];
        });
    }
}
