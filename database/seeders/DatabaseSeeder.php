<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
//
//        // Créer des permissions
//        Permission::create(['name' => 'edit articles']);
//        Permission::create(['name' => 'delete articles']);
//        Permission::create(['name' => 'publish articles']);
//
//        // Créer des rôles et leur attribuer des permissions
//        $adminRole = Role::create(['name' => 'admin']);
//        $adminRole->givePermissionTo(Permission::all());
//
//        $writerRole = Role::create(['name' => 'writer']);
//        $writerRole->givePermissionTo('edit articles');
    }
}
