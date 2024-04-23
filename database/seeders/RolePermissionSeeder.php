<?php

namespace Database\Seeders;

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
        $role = Role::create([
            'name' => 'admin'
        ]);

        $permissions = [
            ['name' => 'information'],
            ['name' => 'information add'],
            ['name' => 'information list'],
            ['name' => 'information edit'],
            ['name' => 'information delete'],
            ['name' => 'skill'],
            ['name' => 'skill add'],
            ['name' => 'skill list'],
            ['name' => 'skill edit'],
            ['name' => 'skill delete'],
            ['name' => 'education'],
            ['name' => 'education add'],
            ['name' => 'education list'],
            ['name' => 'education edit'],
            ['name' => 'education delete'],
            ['name' => 'experience'],
            ['name' => 'experience add'],
            ['name' => 'experience list'],
            ['name' => 'experience edit'],
            ['name' => 'experience delete'],
        ];

        foreach($permissions as $item) {
            Permission::create($item);
        }

        $role->syncPermissions(Permission::all());

        $user = User::first();

        $user->assignRole($role);

    }
}
