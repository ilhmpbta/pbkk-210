<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::firstOrCreate(['name' => 'delete-data']);

        $admin = Role::firstOrCreate(['name' => 'Admin']);
        $admin->givePermissionTo('delete-data');

        Role::firstOrCreate(['name' => 'Staf']);
    }
}
