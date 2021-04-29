<?php

use Illuminate\Database\Seeder;

class AvatarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avatar')->delete();

        $avatar = [
            ['id' => 1, 'name' => 'avatar.png'],
            ['id' => 2, 'name' => 'avatar1.png'],
            ['id' => 3, 'name' => 'avatar2.png'],
            ['id' => 4, 'name' => 'avatar3.png'],
            ['id' => 5, 'name' => 'avatar4.png'],
            ['id' => 6, 'name' => 'avatar5.png'],
            ['id' => 7, 'name' => 'avatar6.png'],
            ['id' => 8, 'name' => 'avatar7.png'],
            ['id' => 9, 'name' => 'avatar8.png'],
            ['id' => 10, 'name' => 'avatar9.png'],
            ['id' => 11, 'name' => 'avatar10.png'],
            ['id' => 12, 'name' => 'avatar11.png'],
            ['id' => 13, 'name' => 'avatar12.png'],
            ['id' => 14, 'name' => 'avatar13.png'],
        ];

        DB::table('avatar')->insert($avatar);
    }
}
