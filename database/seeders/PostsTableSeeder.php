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
        $userids = [1,2,3,4,5,6,7,8,9];
        $faker = Faker::create('hu_HU');

        foreach (range(1, 50) as $index) {




            Postmodel::create([

                'user_id' => $userids[array_rand($userids)],

                'context' => $faker->sentence,

            ]);
        }
    }
}
