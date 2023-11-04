<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create(['name' => 'admin']);
        $permissions = [
            ['name' => 'all-user'],
            ['name' => 'create-user'],
            ['name' => 'show-user'],
            ['name' => 'edit-user'],
            ['name' => 'delete-user'],
            ['name' => 'all-roles'],
            ['name' => 'create-roles'],
            ['name' => 'show-roles'],
            ['name' => 'edit-roles'],
            ['name' => 'delete-roles'],
        ];

        foreach($permissions as $item){
            Permission::create($item);
        }
        $role->syncPermissions(Permission::all());
        $user = User::first();

        $user->assignRole($role);
    }
}
