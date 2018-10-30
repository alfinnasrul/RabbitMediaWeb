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
                'name' => $faker->sentence('2', true),
                'qty' => $faker->numberBetween($min = 5, $max = 50),
                'url' => 'work_' . $faker->unique()->numberBetween($min = 1, $max = 16) . '.png',
            ]);
        }

        for ($c = 0; $c < 10; $c++) {
            \App\Testimonial::create([
                'name' => $faker->firstName . " " . $faker->lastName,
                'email' => $faker->email,
                'rate' => $faker->numberBetween($min = 3, $max = 5),
                'comment' => $faker->sentence('5', true)
            ]);
        }

        for ($c = 0; $c < 6; $c++) {
            \App\JenisLayanan::create([
                'icon' => $faker->image(),
                'nama' => $faker->sentence(3, true),
                'deskripsi' => $faker->sentence(10, true),
            ]);
        }

        \App\JenisLayanan::find(1)->update([
            'icon' => 'videography.png',
            'nama' => 'Videography',
            'deskripsi' => 'Video production services for movie/documentary, video advertising, company profile video, event documentary, aftermovies, etc.'
        ]);

        \App\JenisLayanan::find(2)->update([
            'nama' => 'Photography',
            'deskripsi' => 'We provide a variety of photography services for graduation, pre-wedding, studio photoshoot, maternity photoshoot, and more'
        ]);

        \App\JenisLayanan::find(3)->update([
            'nama' => 'Wedding',
            'deskripsi' => 'We provide wedding and reception documentary and also wedding clip producing with romantic-cinematic effect.'
        ]);

        \App\JenisLayanan::find(4)->update([
            'nama' => 'Graphic Design',
            'deskripsi' => 'Services for designing logo, poster, curriculum vitae (CV), and other products.'
        ]);

        \App\JenisLayanan::find(5)->update([
            'nama' => 'Mockup Design',
            'deskripsi' => 'We also provide application (web/mobile-based) mockup design services with minimalist UI and UX that can be customized to your needs.'
        ]);

        \App\JenisLayanan::find(6)->update([
            'nama' => 'Digital Offset',
            'deskripsi' => 'Services for your printing needs. we print a wide variety of products such as: catalogs, magazines, banners, ID cards, flyers, brochures, stickers, yearbooks, etc.'
        ]);
    }
}
