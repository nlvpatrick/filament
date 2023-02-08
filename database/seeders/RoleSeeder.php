<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            [
                'name'  => 'Create Product'
            ],
            [
                'name'  => 'Edit Product'
            ],
            [
                'name'  => 'View Product'
            ],
            [
                'name'  => 'Delete Product'
            ],
            [
                'name'  => 'Create Category'
            ],
            [
                'name'  => 'Edit Category'
            ],
            [
                'name'  => 'View Category'
            ],
            [
                'name'  => 'Delete Category'
            ],
            [
                'name'  => "Create User"
            ],
            [
                'name'  => "Edit User"
            ],
            [
                'name'  => 'View User',
            ],
            [
                'name'  => 'Delete User',
            ],
            [
                'name'  => 'Create Role',
            ],
            [
                'name'  => 'Edit Role'
            ],
            [
                'name'  => 'View Role'
            ],
            [
                'name'  => 'Delete Role'
            ],
            [
                'name'  => 'Create Permission'
            ],
            [
                'name'  => 'Edit Permission'
            ],
            [
                'name'  => 'View Permission'
            ],
            [
                'name'  => 'Delete Permission'
            ]
        ]; 

        foreach ($permission as $permissions) {
            Permission::create($permissions);
        }

        $writer = Role::create(['name' => 'Writer']);

        $writer->givePermissionTo(Permission::all());
        $writer->revokePermissionTo([
            'Edit Product',
            'Delete Product',
            'Edit Category',
            'Delete Category',
            'Edit User',
            'Delete User',
            'Edit Role',
            'Delete Role',
            'Edit Permission',
            'Delete Permission',
            'Create Permission',
            'Create Role',
        ]);

        $moderator = Role::create(['name' => 'Moderator']);
        $moderator->givePermissionTo(Permission::all());
        $moderator->revokePermissionTo([
            'Delete Product',
            'Delete Category',
            'Delete User',
            'Delete Role',
            'Delete Permission',
        ]);

    }
}
