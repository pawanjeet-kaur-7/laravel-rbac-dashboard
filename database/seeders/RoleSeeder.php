<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        // Create permissions
        $manageUsers = Permission::create(['name' => 'manage users']);
        $manageProducts = Permission::create(['name' => 'manage products']);
        
        $admin = User::create(['name' => 'Admin User', 'email' => 'admin@example.com', 'password' => Hash::make('password')]);
        $admin->assignRole('admin');
        
        $user = User::create(['name' => 'Normal User', 'email' => 'user@example.com', 'password' => Hash::make('password')]);
        $user->assignRole('user');

        // Assign permissions to roles
        $adminRole->givePermissionTo($manageUsers, $manageProducts);
        $userRole->givePermissionTo($manageProducts);
    }
}
