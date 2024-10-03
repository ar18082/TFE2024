<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use App\Models\ParentUser;

class ParentUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('fr_BE');
        for ($i = 0; $i < 50; $i++) {
            $user = User::where('babysitter_user_id', null)
                ->where('parent_user_id', null)
                ->where('inscriptConf', true)
                ->first();

            if ($user === null) {
                continue;
            }
            $parent = ParentUser::create([
                'Nbr_children' => rand(1, 4),
                'description' =>$faker->text,
            ]);

            $user->parent_user_id = $parent->id;
            $user->save();

        }
    }
}
