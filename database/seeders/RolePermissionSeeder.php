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
        //
        $permissions = [
            'manage statistics',
            'manage products',
            'manage priciples',
            'manage testimonials',
            'manage clients',
            'manage teams',
            'manage abouts', 
            'manage appointments',
            'manage hero sections',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(
                [
                    'name' => $permission
                ]
                );
        }

        $dessignManagerRole = Role::firstOrCreate([
            'name' => 'dessign_manager'
        ]);
        $dessignManagerPermissions = [
            'manage products',
            'manage priciples',
            'manage testimonials',
        ];
        $dessignManagerRole->syncPermissions($dessignManagerPermissions);

        $superAdminRole = Role::firstOrCreate([
            'name' => 'super_admin'
        ]); 

        $user = User::create([
            'name'=> 'Brillcomp',
            'email'=> 'super@admin.com',
            'password'=> bcrypt('12341234'),
        ]);

        $user->assignRole($superAdminRole);
    }
}
