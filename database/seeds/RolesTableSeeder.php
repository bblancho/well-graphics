<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('roles')->delete();

        $roles = [
            ['id' => 1, 'title' => 'admin'],
            ['id' => 2, 'title' => 'membre'],
            ['id' => 3, 'title' => 'clients'],
        ];

        DB::table('roles')->insert($roles);
    }
}
