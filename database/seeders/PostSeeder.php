<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $roleAdmin = Role::create(['name' => 'admin']);
        // $roleStudent = Role::create(['name' => 'student']);
        // $roleTeacher = Role::create(['name' => 'teacher']);
        // // Search user in table users by id
        // $userAdmin = User::find(1);
        // $userTeacher = User::find(2);
        // $userStudent = User::find(3);
        // // Assing roles by user
        // $userAdmin->assignRole($roleAdmin);
        // $userTeacher->assignRole($roleTeacher);
        // $userStudent->assignRole($roleStudent);

        // Permission::create(['name' => 'teacher.post.index']);

        $roleAdmin = Role::find(1);
        $roleStudent = Role::find(2);
        $roleTeacher = Role::find(3);

        // Permission::find(1)->assignRole($roleAdmin);
        // Permission::find(1)->assignRole($roleTeacher);

        // Remover Permisos sobre los Roles
        Permission::find(1)->removeRole($roleAdmin);
    }
}
