<?php

use Illuminate\Database\Seeder;

class Mahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert(array(
            'nrp' => '5113100016',
            'nama' => 'ersad@gmail.com',
            'password' => bcrypt('password'),
        ));
        DB::table('mahasiswa')->insert(array(
            'nrp' => '5113100017',
            'nama' => 'ahmad@gmail.com',
            'password' => bcrypt('password'),
        ));
        DB::table('mahasiswa')->insert(array(
            'nrp' => '5113100018',
            'nama' => 'ishla@gmail.com',
            'password' => bcrypt('password'),
        ));
        //
    }
}
