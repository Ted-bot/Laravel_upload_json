<?php

namespace Database\Factories;

use App\Models\CreditCard;
use Illuminate\Database\Eloquent\Factories\Factory;

class CreditCardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CreditCard::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        // function getNumber(){
        //     $numbers = $this->numbers;
        //     foreach ($numbers as $number){
        //         return $number;
        //     }
        // }

        return [
            // 'type' => $this->faker->name(),
            // 'number' => $this->faker->unique()->safeEmail(),
            // 'name' => now(),
            // 'expirationDate' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ];
    }

}
