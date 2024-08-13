<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 3,
                'pembeli' => 'Daniel',
                'penjualan_kode' =>	1,
                'penjualan_tanggal' => now(),	
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'Foster',
                'penjualan_kode' =>	2,
                'penjualan_tanggal' => now(),	
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Gracelina',
                'penjualan_kode' =>	3,
                'penjualan_tanggal' => now(),	
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,
                'pembeli' => 'Yoselyn',
                'penjualan_kode' =>	4,
                'penjualan_tanggal' => now(),	
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'Angelina',
                'penjualan_kode' =>	5,
                'penjualan_tanggal' => now(),	
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Falencia',
                'penjualan_kode' =>	6,
                'penjualan_tanggal' => now(),	
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'Emira',
                'penjualan_kode' =>	7,
                'penjualan_tanggal' => now(),	
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'Zehra',
                'penjualan_kode' =>	8,
                'penjualan_tanggal' => now(),	
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Serafina',
                'penjualan_kode' =>	9,
                'penjualan_tanggal' => now(),	
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Mataya',
                'penjualan_kode' =>	10,
                'penjualan_tanggal' => now(),	
                'created_at' => now(),
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
