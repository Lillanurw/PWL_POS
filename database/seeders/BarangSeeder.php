<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [   
                'barang_id'=> 1,
                'kategori_id' => 1,
                'barang_kode' => 'CL01',
                'barang_nama' => 'Cleanser Emina',
                'harga_beli' => 3000,
                'harga_jual' => 5000,
            ],
            [   
                'barang_id'=> 2,
                'kategori_id' => 2,
                'barang_kode' => 'TN01',
                'barang_nama' => 'Toner Emina',
                'harga_beli' => 18000,
                'harga_jual' => 20000,
            ],
            [   
                'barang_id'=> 3,
                'kategori_id' => 3,
                'barang_kode' => 'SR01',
                'barang_nama' => 'Serum Emina',
                'harga_beli' => 3000,
                'harga_jual' => 5000,
            ],
            [   
                'barang_id'=> 4,
                'kategori_id' => 4,
                'barang_kode' => 'MS01',
                'barang_nama' => 'Moisturizer Emina',
                'harga_beli' => 20000,
                'harga_jual' => 25000,
            ],
            [   
                'barang_id'=> 5,
                'kategori_id' => 5,
                'barang_kode' => 'SS01',
                'barang_nama' => 'Sunscreen Emina',
                'harga_beli' => 25000,
                'harga_jual' => 30000,
            ],
            [   
                'barang_id'=> 6,
                'kategori_id' => 1,
                'barang_kode' => 'CL02',
                'barang_nama' => 'Cleanser HadaLabo',
                'harga_beli' => 23000,
                'harga_jual' => 25000,
            ],
            [   
                'barang_id'=> 7,
                'kategori_id' => 2,
                'barang_kode' => 'TN02',
                'barang_nama' => 'Toner HadaLabo',
                'harga_beli' => 20000,
                'harga_jual' => 22000,
            ],
            [   
                'barang_id'=> 8,
                'kategori_id' => 3,
                'barang_kode' => 'SR02',
                'barang_nama' => 'Serum HadaLabo',
                'harga_beli' => 36000,
                'harga_jual' => 40000,
            ],
            [   
                'barang_id'=> 9,
                'kategori_id' => 4,
                'barang_kode' => 'MS02',
                'barang_nama' => 'Moisturizer HadaLabo',
                'harga_beli' => 32000,
                'harga_jual' => 35000,
            ],
            [   
                'barang_id'=> 10,
                'kategori_id' => 5,
                'barang_kode' => 'SS02',
                'barang_nama' => 'Sunscreen HadaLabo',
                'harga_beli' => 40000,
                'harga_jual' => 40000,
            ],
           
        ];
        DB::table('m_barang')->insert($data);
    }
}

