<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'invoice_number' => fake()->numberBetween(1000,9999),
            'invoice_date_at' =>fake()->date(),
            'due_at' => fake()->date(),
            'discount_type' => fake()->numberBetween(1000,9999),
            'discount' => fake()->numberBetween(1000,9999),
            'biller_id' => fake()->numberBetween(1000,9999),
            'paid_date_at'=> fake()->date(),
            'subtotal' => fake()->numberBetween(1000,9999),
            'balance_due'=>fake()->date(),

            // $table->string('invoice_number');
            // $table->string('invoice_date_at');
            // $table->string('due_at');
            // $table->string('discount_type');
            // $table->unsignedBigInteger('discount');
            // $table->unsignedInteger('biller_id');
            // $table->unsignedInteger('paid_date_at');
            // $table->unsignedInteger('subtotal');
            // $table->unsignedInteger('balance_due');
            // $table->timestamps();
        ];
    }
}
