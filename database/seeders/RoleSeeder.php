<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r_root = Role::create(['name'=>'root']);
        $r_admin = Role::create(['name'=>'admin']);
        $r_user1 = Role::create(['name' => 'armamento']);
        $r_user2 = Role::create(['name' => 'municiones']);
        $r_user3 = Role::create(['name' => 'explisivos']);
        $r_user4 = Role::create(['name' => 'orden_publico']);
        
        
        
        Permission::create(['name' => 'general'])->assignRole($r_root);
        Permission::create(['name' => 'mov_material'])->assignRole($r_root);
        Permission::create(['name' => 'armamento'])->syncRoles($r_root, $r_user1, $r_admin);
        Permission::create(['name' => 'municiones'])->syncRoles($r_root, $r_user2, $r_admin);
        Permission::create(['name' => 'explisivos'])->syncRoles($r_root, $r_user3, $r_admin);
        Permission::create(['name' => 'orden_publico'])->syncRoles($r_root, $r_user4, $r_admin);

        Permission::create(['name' => 'crear'])->syncRoles([$r_root, $r_user1, $r_user2, $r_user3, $r_user4, $r_admin]);
        Permission::create(['name' => 'eliminar'])->syncRoles([$r_root,$r_admin]);
        Permission::create(['name' => 'editar'])->syncRoles([$r_root,$r_admin]);
        
    }
}
