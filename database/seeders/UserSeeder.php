<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('fr_BE');
        $NomDomaine = ['@gmail.com', '@hotmail.com', '@yahoo.com', '@outlook.com', '@live.com', '@icloud.com', '@msn.com', '@skynet.be', '@voo.be', '@proximus.be'];
        for ($i = 0; $i < 50; $i++) {
            $firstName = $faker->firstName;
            $lastName = $faker->lastName;
            User::create([
                'name' => $lastName,
                'firstname' => $firstName,
                'phoneNumber' => $faker->phoneNumber,
                'addressStreet' => $faker->streetName,
                'addressNumber' => $faker->buildingNumber,
                'inscriptConf' => true,
                'email' => strtolower($firstName . '.' . $lastName) . $NomDomaine[array_rand($NomDomaine)],
                'password' => Hash::make('azerty123'),
                'email_verified_at' => $faker->dateTimeThisDecade->format('Y-m-d H:i:s'),
            ]);

        }
    }
}
