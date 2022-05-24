<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Post;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 50; $i++) {
            Post::create([
                'nama' => $faker->name,
                'alamat' => $faker->address,
                'umur' => $faker->numberBetween(15, 30),
                'category_id' => $faker->numberBetween(1, 2)
            ]);
        }

        // Post::create([
        //     'nama' => 'asdasd',
        //     'alamat' => 'dasdasfdsdfsdfsdf',
        //     'umur' => 23,
        //     'category_id' => 1
        // ]);
    }
}
