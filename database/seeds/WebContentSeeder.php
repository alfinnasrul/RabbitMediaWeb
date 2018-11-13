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

        for ($c = 0; $c < 3; $c++) {
            \App\layanan::create([
                'nama_layanan' => $faker->sentence(3, true),
                'isi_layanan' => $faker->sentence(10, true),
                'jenislayanan_id' => rand(\App\JenisLayanan::min('id'), \App\JenisLayanan::max('id')),
                'harga' => $faker->sentence(10, true),
            ]);
        }

        for ($c = 0; $c < 4; $c++) {
            \App\jobdesk::create([
                'jabatan' => $faker->sentence(3, true),
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

        \App\layanan::find(1)->update([
            'nama_layanan' => 'Paket FotoShoot',
            'isi_layanan' => '1 Fotografer, 1 Pengarah Gaya, No Limit Foto, DLL',
            'jenislayanan_id' => '2',
            'harga' => '500000',
        ]);

        \App\layanan::find(2)->update([
            'nama_layanan' => 'Paket VideoShoot',
            'isi_layanan' => '1 Fotografer, 1 Pengarah Gaya, No Limit Foto, DLL',
            'jenislayanan_id' => '1',
            'harga' => '500000',
        ]);

        \App\layanan::find(3)->update([
            'nama_layanan' => 'Paket DesainGrafis',
            'isi_layanan' => '1 Fotografer, 1 Pengarah Gaya, No Limit Foto, DLL',
            'jenislayanan_id' => '4',
            'harga' => '500000',
        ]);

        \App\jobdesk::find(1)->update([
            'jabatan' => 'Admin',
        ]);

        \App\jobdesk::find(2)->update([
            'jabatan' => 'Videographer',
        ]);

        \App\jobdesk::find(3)->update([
            'jabatan' => 'Photographer',
        ]);

        \App\jobdesk::find(4)->update([
            'jabatan' => 'Design Grafis',
        ]);

    }
}
