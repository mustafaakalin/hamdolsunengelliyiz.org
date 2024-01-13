<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        


        Permission::create(['name' => 'viewAny-post']);
        Permission::create(['name' => 'view-post']);
        Permission::create(['name' => 'create-post']);
        Permission::create(['name' => 'update-post']);
        Permission::create(['name' => 'delete-post']);
        Permission::create(['name' => 'restore-post']);
        Permission::create(['name' => 'forceDelete-post']);
        Permission::create(['name'=> 'viewAny-user']);
        Permission::create(['name'=> 'view-user']);
        Permission::create(['name' => 'create-user']);
        Permission::create(['name' => 'update-user']);
        Permission::create(['name' => 'delete-user']);
        Permission::create(['name'=> 'restore-user']);
        Permission::create(['name'=> 'forceDelete-user']);



        $role = Role::create(['name' => 'user']);
        $role->givePermissionTo(['viewAny-post','view-post','create-post','update-post','delete-post','restore-post','forceDelete-post']);
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());



        // create demo users
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
        ])->assignRole('admin');
        User::factory()->create([
            'name' => 'User',
            'email' => 'user@example.com',
        ])->assignRole('user');
        
        
    }
}
