<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use App\Models\BabysitterUser;


class BabysitterUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('fr_BE');
        $url = ['https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.twitter.com/'];

        for ($i = 0; $i < 25; $i++) {
//            $user = User::find(rand(2, 50));
            $user = User::where('babysitter_user_id', null)
                ->where('parent_user_id', null)
                ->first();
            $babysitter = BabysitterUser::create([
                'description' => $faker->text,
                'price' => $faker->randomFloat(2, 5, 25),
                'social_network' => $url[array_rand($url)]. $user->name.$user->firstname,

            ]);
            $user->babysitter_user_id = $babysitter->id;
            $user->save();

        }
    }
}
