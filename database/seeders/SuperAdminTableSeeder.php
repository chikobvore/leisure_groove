<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\HASH;
use Str;
use App\Models\User;

class SuperAdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'super', 'email' => 'super@admin.com', 'password' => Hash::make('super123'), 'role_id' => 1],
            ['name' => 'admin', 'email' => 'admin@admin.com', 'password' => Hash::make('admin123'), 'role_id' => 2],
            ['name' => 'user','email' => 'use@admin.com', 'password' => Hash::make('user123'), 'role_id' => 3],
        ];
        foreach ($users as $user) {
            User::query()->create($user);
        }
        DB::table('role_user')->insert([
            'user_id' => '1',
            'role_id' => '1',
        ]);
    }
}
