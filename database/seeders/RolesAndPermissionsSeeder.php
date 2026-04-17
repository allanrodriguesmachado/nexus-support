<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        $managerAdmin = Permission::create(['name' => 'manager_admin', 'guard_name' => 'web']);
        $seeMyCalls = Permission::create(['name' => 'see_my_calls', 'guard_name' => 'web']);

        $admin = Role::create(['name' => 'admin', 'guard_name' => 'web']);
        $client = Role::create(['name' => 'client', 'guard_name' => 'web']);
        $technical = Role::create(['name' => 'technical', 'guard_name' => 'web']);

        $admin->givePermissionTo([$managerAdmin]);
        $client->givePermissionTo($seeMyCalls);
        $technical->givePermissionTo($seeMyCalls);
    }
}
