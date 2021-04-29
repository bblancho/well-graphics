<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('tags')->delete();

        $tags = [
            ['id' => 1, 'name' => 'graphique'],
            ['id' => 2, 'name' => 'web'],
            ['id' => 3, 'name' => 'video'],
        ];

        DB::table('tags')->insert($tags);
    }
}
