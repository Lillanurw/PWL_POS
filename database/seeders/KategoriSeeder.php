<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [   
                'kategori_id'=>1,
                'kategori_kode' => 'SK001',
                'kategori_nama' => 'Cleanser',
            ],
            [
                'kategori_id'=>2,
                'kategori_kode' => 'SK002',
                'kategori_nama' => 'Toner',
            ],
            [
                'kategori_id'=>3,
                'kategori_kode' => 'SK003',
                'kategori_nama' => 'Serum',
            ],
            [
                'kategori_id'=>4,
                'kategori_kode' => 'SK004',
                'kategori_nama' => 'Moisturizer',
            ],
            [
                'kategori_id'=>5,
                'kategori_kode' => 'SK005',
                'kategori_nama' => 'Sunscreen',
            ],
           
        ];
        DB::table('m_kategori')->insert($data);
}
}
