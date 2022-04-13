<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('roles')->truncate();

        Role::create([
        'name' => "Owner",
        ]);

        Role::create([
            'name' => "User",
        ]);
    }
}