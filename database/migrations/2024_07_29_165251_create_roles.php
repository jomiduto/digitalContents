<?php

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleStudent = Role::create(['name' => 'student']);
        $roleTeacher = Role::create(['name' => 'teacher']);
        // Search user in table users by id
        $userAdmin = User::find(1);
        $userTeacher = User::find(2);
        $userStudent = User::find(3);
        // Assing roles by user
        $userAdmin->assignRole($roleAdmin);
        $userTeacher->assignRole($roleTeacher);
        $userStudent->assignRole($roleStudent);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
