<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SuperadminSeeder::class,
        ]);
        // Create roles and permissions
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleSuperAdmin = Role::create(['name' => 'superadmin']);

        $permissionValas = Permission::create(['name' => 'edit valas']);
        $permissionCustomer = Permission::create(['name' => 'edit customer']);
        $permissionTransaction = Permission::create(['name' => 'edit transaction']);
        $permissionMembership = Permission::create(['name' => 'edit membership']);
        $permissionAll = Permission::create(['name' => 'edit all']);

        $roleAdmin->givePermissionTo($permissionValas, $permissionCustomer, $permissionTransaction);
        $roleSuperAdmin->givePermissionTo($permissionAll);
    }
}
