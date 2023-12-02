<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $payment_at = Carbon::now();

        return [
            'amount' => fake()->numberBetween(1000,10000),
            'client_id' => fake()->numberBetween(1, 1000),
            'invoice_id' => fake()->numberBetween(1, 1000),
            'payment_at' => $payment_at,
            'payment_type' => fake()->paragraph(),
            'transaction_reference' => fake()->paragraph(),
        ];
    }
}
