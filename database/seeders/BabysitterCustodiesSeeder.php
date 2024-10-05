<?php

namespace Database\Seeders;

use App\Models\BabysitterUser;
use App\Models\Custody_criteria;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BabysitterCustodiesSeeder extends Seeder
{
    public function run()
    {
        // Récupérer tous les utilisateurs qui ont un babysitter_user_id différent de null
        $users = User::whereNotNull('babysitter_user_id')->get();

        // Récupérer tous les critères de garde
        $criteria = Custody_criteria::all();

        foreach ($users as $user) {
            // Choisir 2 critères au hasard
            $nbCriteria = rand(1, 6);
            $randomCriteria = $criteria->random($nbCriteria);

            foreach ($randomCriteria as $criterion) {
                // Insérer dans la table de liaison
                DB::table('babysitter_custodies')->insert([
                    'user_id' => $user->id,
                    'criteria_id' => $criterion->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
