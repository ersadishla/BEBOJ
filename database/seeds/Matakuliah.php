<?php

use Illuminate\Database\Seeder;

class Matakuliah extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matakuliah')->insert(array(
            'nama' => 'Pemrograman Web',
            'sks' => 3,
            'semester' => 4,
        ));

        DB::table('matakuliah')->insert(array(
            'nama' => 'Sistem Basis Data',
            'sks' => 4,
            'semester' => 3,
        ));

        //
    }
}
