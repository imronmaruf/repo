<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DosbingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $data = [
            [
                'nama' => 'Rizky Putra Fhonna, S.T., M.Kom',
                'nip' => '199111192019031012',
            ],
            [
                'nama' => 'Prof. Dr. Ir. Dahlan Abdullah, S.T., M.Kom, IPU., ASEAN Eng',
                'nip' => '197602282002121005',
            ],
        ];
        DB::table('dosen_pembimbing')->insert($data);
    }
}
