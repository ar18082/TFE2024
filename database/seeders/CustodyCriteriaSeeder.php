<?php

namespace Database\Seeders;

use App\Models\Custody_criteria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustodyCriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $custody = [
            ['custody_criteria' => 'Prépare à manger', 'description' => 'La babysitter est capable de préparer des repas pour les enfants.', 'valide' => true],
            ['custody_criteria' => 'Ne prépare pas à manger', 'description' => 'La babysitter ne prépare pas de repas.', 'valide' => true],
            ['custody_criteria' => 'Aide pour les devoirs', 'description' => 'La babysitter aide les enfants avec leurs devoirs scolaires.', 'valide' => true],
            ['custody_criteria' => 'Lit une histoire', 'description' => 'La babysitter lit des histoires aux enfants avant de dormir ou pendant la journée.', 'valide' => true],
            ['custody_criteria' => 'Véhiculé', 'description' => 'La babysitter a un moyen de transport et peut conduire les enfants si nécessaire.', 'valide' => true],
            ['custody_criteria' => 'Aide pour le bain', 'description' => 'La babysitter aide les enfants à prendre leur bain.', 'valide' => true],
            ['custody_criteria' => 'Change les couches', 'description' => 'La babysitter est capable de changer les couches des bébés et des tout-petits.', 'valide' => true],
            ['custody_criteria' => 'Peut garder des enfants de 0-2 ans', 'description' => 'La babysitter est prête à garder des enfants de 0 à 2 ans', 'valide' => true],
            ['custody_criteria' => 'Peut garder des enfants de 3-5 ans', 'description' => 'La babysitter est prête à garder des enfants de 3 à 5 ans', 'valide' => true],
            ['custody_criteria' => 'Peut garder des enfants de 6-10 ans', 'description' => 'La babysitter est prête à garder des enfants de 6 à 10 ans', 'valide' => true],
            ['custody_criteria' => 'Peut garder des enfants de 11 ans et plus', 'description' => 'La babysitter est prête à garder des enfants de 11 ans et plus.', 'valide' => true],
            ['custody_criteria' => 'Activités créatives', 'description' => 'La babysitter propose des activités créatives comme le dessin, la peinture ou l\'artisanat.', 'valide' => true],
            ['custody_criteria' => 'Activités sportives', 'description' => 'La babysitter organise et participe à des activités sportives avec les enfants.', 'valide' => true],
            ['custody_criteria' => 'Aide à l\'endormissement', 'description' => 'La babysitter aide les enfants à s\'endormir en créant une routine apaisante.', 'valide' => true],
            ['custody_criteria' => 'Accompagnement aux activités extérieures', 'description' => 'La babysitter accompagne les enfants à des activités extérieures comme le parc, la piscine ou des sorties éducatives.', 'valide' => true],
            ['custody_criteria' => 'Soins médicaux de base', 'description' => 'La babysitter est capable de fournir des soins médicaux de base comme appliquer des pansements ou donner des médicaments prescrits.', 'valide' => true],
            ['custody_criteria' => 'Sécurité et surveillance', 'description' => 'La babysitter assure une surveillance constante pour garantir la sécurité des enfants.', 'valide' => true],
            ['custody_criteria' => 'Jeux éducatifs', 'description' => 'La babysitter organise des jeux éducatifs pour stimuler l\'apprentissage des enfants.', 'valide' => true],
            ['custody_criteria' => 'Respect des routines familiales', 'description' => 'La babysitter suit les routines et les règles établies par la famille.', 'valide' => true],
            ['custody_criteria' => 'Connaissances en premiers secours', 'description' => 'La babysitter a des connaissances en premiers secours et peut réagir en cas d\'urgence.', 'valide' => true],
            ['custody_criteria' => 'Flexibilité horaire', 'description' => 'La babysitter peut s\'adapter à des horaires flexibles selon les besoins des parents.', 'valide' => true],
            ['custody_criteria' => 'Aide aux tâches ménagères', 'description' => 'La babysitter aide avec certaines tâches ménagères légères comme ranger les jouets ou faire la vaisselle.', 'valide' => true],
            ['custody_criteria' => 'Patience et empathie', 'description' => 'La babysitter fait preuve de patience et d\'empathie avec les enfants.', 'valide' => true],
            ['custody_criteria' => 'Expérience avec des enfants ayant des besoins spéciaux', 'description' => 'La babysitter a de l\'expérience et des compétences pour s\'occuper d\'enfants ayant des besoins spéciaux.', 'valide' => true],
            ['custody_criteria' => 'Bonne communication avec les parents', 'description' => 'La babysitter communique efficacement avec les parents concernant les activités et le bien-être des enfants.', 'valide' => true],
            ['custody_criteria' => 'Création d\'un environnement stimulant', 'description' => 'La babysitter crée un environnement stimulant et enrichissant pour les enfants.', 'valide' => true],
            ['custody_criteria' => 'Capacité à gérer les conflits', 'description' => 'La babysitter sait gérer et résoudre les conflits entre enfants.', 'valide' => true],
            ['custody_criteria' => 'Encadrement des devoirs', 'description' => 'La babysitter encadre les enfants pendant qu\'ils font leurs devoirs pour s\'assurer qu\'ils les terminent correctement.', 'valide' => true],
            ['custody_criteria' => 'Organisation de fêtes d\'anniversaire', 'description' => 'La babysitter peut aider à organiser et animer des fêtes d\'anniversaire pour les enfants.', 'valide' => true],
            ['custody_criteria' => 'Surveillance nocturne', 'description' => 'La babysitter est disponible pour garder les enfants pendant la nuit.', 'valide' => true],
            ['custody_criteria' => 'Langues étrangères', 'description' => 'La babysitter parle une ou plusieurs langues étrangères et peut communiquer avec les enfants dans ces langues.', 'valide' => true],
            ['custody_criteria' => 'Activités en plein air', 'description' => 'La babysitter organise des activités en plein air comme des promenades, des jeux dans le jardin ou des visites de parcs.', 'valide' => true],
            ['custody_criteria' => 'Utilisation de la technologie', 'description' => 'La babysitter utilise des outils technologiques éducatifs comme des applications de lecture ou des jeux interactifs pour les enfants.', 'valide' => true],
        ];

        DB::table('custody_criterias')->insert($custody);

    }
}
