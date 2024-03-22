<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            "access-user", "create-user", "edit-user", "delete-user",
            "access-role", "create-role", "edit-role", "delete-role",
            "access-permission", "create-permission", "edit-permission", "delete-permission",
        ];

        foreach ($permissions as $permission) {
            Permission::create([
                "name" => $permission,
                "guard_name" => "web",
            ]);
        }
    }
}
