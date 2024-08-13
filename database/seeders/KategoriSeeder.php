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
        $data =[
            [
                'kategori_kode' => 'SMG',
                'kategori_nama' => 'Samsung',
                'created_at' => now(),
            ],
            [
                'kategori_kode' => 'XMI',
                'kategori_nama' => 'Xiaomi',
                'created_at' => now(),
            ],
            [
                'kategori_kode' => 'APL',
                'kategori_nama' => 'Apple',
                'created_at' => now(),
            ],
            [
                'kategori_kode' => 'OPP',
                'kategori_nama' => 'Oppo',
                'created_at' => now(),
            ],
            [
                'kategori_kode' => 'VIV',
                'kategori_nama' => 'Vivo',
                'created_at' => now(),
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
