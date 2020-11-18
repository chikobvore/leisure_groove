<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['name' => 'ROLE_SUPERADMIN'],
            ['name' => 'ROLE_ADMIN'],
            ['name' => 'ROLE_USER'],
           ]);
    }
}
