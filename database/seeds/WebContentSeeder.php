<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class WebContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');

        for ($c = 0; $c < 15; $c++) {
            \App\Portfolio::create([
                'name' => $faker->sentence('2',true),
                'qty' => $faker->numberBetween($min = 5, $max=50),
                'url' => 'work_' . $faker->unique()->numberBetween($min = 1, $max = 16) . '.png',
            ]);
        }

        for ($c = 0; $c < 10; $c++){
            \App\Testimonial::create([
               'name' => $faker->firstName." ".$faker->lastName,
               'email' => $faker->email,
               'rate' => $faker->numberBetween($min=3,$max=5),
               'comment' => $faker->sentence('5',true)
            ]);
        }
    }
}
