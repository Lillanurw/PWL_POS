<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tanggal = Carbon::now();
        $data = [
        [   
            'penjualan_id' => 1,
            'user_id'=>1,
            'pembeli' => 'Lilla',
            'penjualan_kode' => '0001',
            'penjualan_tanggal' => $tanggal
        ],
        [   
            'penjualan_id' => 2,
            'user_id'=>1,
            'pembeli' => 'Nur',
            'penjualan_kode' => '0002',
            'penjualan_tanggal' => $tanggal
        ],
        [   
            'penjualan_id' => 3,
            'user_id'=>1,
            'pembeli' => 'Zahra',
            'penjualan_kode' => '0003',
            'penjualan_tanggal' => $tanggal
        ],
        [   
            'penjualan_id' => 4,
            'user_id'=>1,
            'pembeli' => 'Mitchelle',
            'penjualan_kode' => '0004',
            'penjualan_tanggal' => $tanggal
        ],
        [   
            'penjualan_id' => 5,
            'user_id'=>1,
            'pembeli' => 'Fatma',
            'penjualan_kode' => '0005',
            'penjualan_tanggal' => $tanggal
        ],
        [   
            'penjualan_id' => 6,
            'user_id'=>1,
            'pembeli' => 'Lailatul',
            'penjualan_kode' => '0006',
            'penjualan_tanggal' => $tanggal
        ],
        [   
            'penjualan_id' => 7,
            'user_id'=>1,
            'pembeli' => 'Zahida',
            'penjualan_kode' => '0007',
            'penjualan_tanggal' => $tanggal
        ],
        [   
            'penjualan_id' => 8,
            'user_id'=>1,
            'pembeli' => 'Luluk',
            'penjualan_kode' => '0008',
            'penjualan_tanggal' => $tanggal
        ],
        [   
            'penjualan_id' => 9,
            'user_id'=>1,
            'pembeli' => 'Erika',
            'penjualan_kode' => '0009',
            'penjualan_tanggal' => $tanggal
        ],
        [   
            'penjualan_id' => 10,
            'user_id'=>1,
            'pembeli' => 'Sukma',
            'penjualan_kode' => '0010',
            'penjualan_tanggal' => $tanggal
        ],
    ];
    DB::table('t_penjualan')->insert($data);
}
}