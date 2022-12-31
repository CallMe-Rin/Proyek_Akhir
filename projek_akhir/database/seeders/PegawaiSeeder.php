<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawais')->insert([
            'nama' => 'Rinaldo Dwi Faturahman',
            'umur' => '21',
            'notelpon' => '08934234314',
            'alamat' => 'Semarang',
            'jeniskelamin' => 'Laki-Laki',
        ]);
    }
}