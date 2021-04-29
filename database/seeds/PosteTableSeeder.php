<?php

use Illuminate\Database\Seeder;

class PosteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('poste')->delete();

        $poste = [
            ['id' => 1, 'name' => 'publication', 'fullname'=>'Responsable publication'],
            ['id' => 2, 'name' => 'finance', 'fullname'=>'Responsable financier'],
            ['id' => 3, 'name' => 'webmaster', 'fullname'=>'Développeur'],
            ['id' => 4, 'name' => 'graphiste', 'fullname'=>'Graphiste'],
        ];

        DB::table('poste')->insert($poste);
    }
}
