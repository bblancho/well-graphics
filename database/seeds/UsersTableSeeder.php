<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'tossina',
            'name' => 'Tossina Demilah',
            'email' => 'the2rtd@gmail.com',
            'poste' => 'webmaster',
            'password' => bcrypt('password'),
            'user_type' => 'admin',
        ]);
    }
}
