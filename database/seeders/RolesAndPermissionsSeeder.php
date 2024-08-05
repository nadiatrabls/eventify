<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Créer des rôles
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);

        // Créer des permissions
        Permission::create(['name' => 'create categories']);
        Permission::create(['name' => 'edit categories']);
        Permission::create(['name' => 'delete categories']);
        Permission::create(['name' => 'create events']);
        Permission::create(['name' => 'edit events']);
        Permission::create(['name' => 'delete events']);
        Permission::create(['name' => 'view reservations']);

        // Assigner des permissions aux rôles
        $adminRole = Role::findByName('admin');
        $adminRole->givePermissionTo(Permission::all());

        // Les utilisateurs n'ont pas de permissions par défaut, ils en acquièrent plus tard
    }
}
