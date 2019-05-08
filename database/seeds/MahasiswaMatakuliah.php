<?php

use Illuminate\Database\Seeder;

class MahasiswaMatakuliah extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa_matakuliah')->insert(array(
            'mahasiswa_id' => '1',
            'matakuliah_id' => '1',
        ));
        DB::table('mahasiswa_matakuliah')->insert(array(
            'mahasiswa_id' => '1',
            'matakuliah_id' => '2',
        ));
        //
    }
}
