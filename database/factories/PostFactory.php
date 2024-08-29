<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Smknstd\FakerPicsumImages\FakerPicsumImagesProvider($faker));
        $name=$this->faker->sentence();
        return [
            //
            'titulo'=>$name,
            'slug'=>Str::slug($name,'-'),
            'fecha'=>$this->faker->datetime(),
            'extracto'=>$this->faker->text(),
            'descripcion'=>$this->faker->text(),
            'imagen'=>$faker->imageUrl(640,480)

        ];

    }
}
