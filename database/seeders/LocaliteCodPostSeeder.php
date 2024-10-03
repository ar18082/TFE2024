<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\PostalCode_Localite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocaliteCodPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = file_get_contents(base_path('resources/json/Region-Ville-CodePostal.json'));
        $datas = json_decode($json, true);

        foreach ($datas as $data) {
            $localiteCodePost = new PostalCode_Localite();
            $localiteCodePost->localite = $data['ville'];
            $localiteCodePost->postCode = $data['codePostal'];
            $localiteCodePost->city_id = City::where('city', $data['region'])->first()->id;
            $localiteCodePost->save();
        }
    }
}
