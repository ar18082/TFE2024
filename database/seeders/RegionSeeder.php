<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\PostalCode_Localite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // call file resources/json/Region-Ville-CodePostal.json
        $json = file_get_contents(base_path('resources/json/Region-Ville-CodePostal.json'));
        $datas = json_decode($json, true);
        // foreach datas as data
        foreach ($datas as $data) {
            // create region with firstOrCreate method pour les doublons
            $region = City::firstOrCreate([
                'city' => $data['region'],
            ]);


        }
    }
}
