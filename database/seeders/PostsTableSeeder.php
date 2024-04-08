<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use App\Models\Postmodel;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userids = [1,2];
        $faker = Faker::create('hu_HU');

        foreach (range(1, 50) as $index) {
            // Generálj egyedi fájlnevet a képnek


            // Felhasználó létrehozása a generált képekkel
            Postmodel::create([

                'user_id' => $userids[array_rand($userids)],

                'context' => $faker->sentence,

            ]);
        }
    }
}
