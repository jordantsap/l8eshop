<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin_permissions = Permission::all();

        //Supper admin permissions
        $dev_role = new Role();
        $dev_role->name = 'Super-Admin';
        $dev_role->save();
        $dev_role->permissions()->attach($admin_permissions);

        // admin permissions
        $role = Role::create(['name' => 'Admin']);
        $role->permissions()->attach($admin_permissions);

        // Products permissions
        $role = Role::create(['name' => __('Manager')]);
        $role->givePermissionTo(['product_management']);

        // Customer permissions
        $role = Role::create(['name' => 'Customer']);
        $role->givePermissionTo(['order_management']);
    }
}
