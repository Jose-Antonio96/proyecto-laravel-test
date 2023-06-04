<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'organizer']);
        $role3 = Role::create(['name' => 'user']);
/*
        Permission::create(['name' => 'admin.backend'])->assignRole($role1);
        Permission::create(['name' => 'admin.tags'])->assignRole($role1);

        */
        $permission = Permission::create(['name' => 'organizer.travel.create']);
        $role2->givePermissionTo('organizer.travel.create');

        
/*
        Permission::create(['name' => 'user.travel.view'])->syncRoles([$role1, $role2, $role3]);

        Permission::create(['name' => 'organizer.travel.delete'])->assignRole($role2);
        Permission::create(['name' => 'organizer.travel.edit'])->assignRole($role2);

        Permission::create(['name' => 'admin.tags.create'])->assignRole($role1);
        Permission::create(['name' => 'admin.tags.add'])->assignRole($role1);
        Permission::create(['name' => 'admin.tags.edit'])->assignRole($role1);
        Permission::create(['name' => 'admin.tags.delete'])->assignRole($role1);

        
*/
        
    }
}
