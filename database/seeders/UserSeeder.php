<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::firstWhere("name", "Superadmin");

        $user = User::create([
            "email" => "superadmin@local.host",
            "name" => "Superadmin",
            "password" => bcrypt("12345678"),
        ]);

        $user->assignRole($role->id);
    }
}
