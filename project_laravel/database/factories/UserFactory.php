<?php

namespace Database\Factories;

use App\Enums\UserRoleEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'avatar' => $this->faker->imageUrl(),
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'password' => $this->faker->password,
            'role' => $this->faker->randomElement(UserRoleEnum::getValues()),
            'bio' => $this->faker->boolean ? $this->faker->word : null,
            'gender' => $this->faker->boolean,
        ];
    }
}
