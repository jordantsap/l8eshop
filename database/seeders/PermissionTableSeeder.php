<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed the default permissions
      $permissions = Permission::defaultPermissions();
      foreach ($permissions as $perms) {
              Permission::firstOrCreate(['name' => $perms]);
          }
    }
}
