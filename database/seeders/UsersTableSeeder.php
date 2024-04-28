<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('hu_HU');

        foreach (range(1, 20) as $index) {

            $profilkepFileName = 'profilkep_' . $index . '.jpg';
            $boritokepFileName = 'boritokep_' . $index . '.jpg';


            $profilkepUrl = 'https://loremflickr.com/200/200';
            $profilkepContent = file_get_contents($profilkepUrl);
            File::put(public_path('user/' . $profilkepFileName), $profilkepContent);


            $boritokepUrl = 'https://picsum.photos/1920/800';
            $boritokepContent = file_get_contents($boritokepUrl);
            File::put(public_path('user/' . $boritokepFileName), $boritokepContent);


            User::create([
                'name' => $faker->name,
                'username' => $faker->unique()->userName,
                'profilkep' =>  $profilkepFileName,
                'boritokep' =>  $boritokepFileName,
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'bemutatkozas' => $faker->sentence,
                'lakhely' => $faker->city,
                'szulev' => $faker->date($format = 'Y-m-d', $max = '2002-01-01'),
                'neme' => $faker->randomElement(['férfi', 'nő', 'Nincs megadva']),
                'admin' => false,
                'remember_token' => Str::random(10),

            ]);
        }
    }
}
