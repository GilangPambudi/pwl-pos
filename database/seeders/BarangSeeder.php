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
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'SMG-001',
                'barang_nama' => 'Samsung Galaxy S24',
                'harga_jual' => 15000000,
                'harga_beli' => 10000000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 2,
                'barang_kode' => 'XMI-001',
                'barang_nama' => 'Xiaomi Redmi Note 13',
                'harga_jual' => 3000000,
                'harga_beli' => 2000000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 3,
                'barang_kode' => 'APL-001',
                'barang_nama' => 'Apple iPhone 15',
                'harga_jual' => 20000000,
                'harga_beli' => 15000000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 4,
                'barang_kode' => 'OPP-001',
                'barang_nama' => 'Oppo Reno 11',
                'harga_jual' => 4000000,
                'harga_beli' => 2500000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 5,
                'barang_kode' => 'VIV-001',
                'barang_nama' => 'Vivo V40',
                'harga_jual' => 6000000,
                'harga_beli' => 4000000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 1,
                'barang_kode' => 'SMG-002',
                'barang_nama' => 'Samsung Galaxy S24 Ultra',
                'harga_jual' => 20000000,
                'harga_beli' => 15000000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 2,
                'barang_kode' => 'XMI-002',
                'barang_nama' => 'Xiaomi 14',
                'harga_jual' => 10000000,
                'harga_beli' => 7000000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 3,
                'barang_kode' => 'APL-002',
                'barang_nama' => 'Apple iPhone 15 Pro Max',
                'harga_jual' => 25000000,
                'harga_beli' => 16000000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 4,
                'barang_kode' => 'OPP-002',
                'barang_nama' => 'Oppo Find N3 Flip',
                'harga_jual' => 14000000,
                'harga_beli' => 10000000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'VIV-002',
                'barang_nama' => 'Vivo X100',
                'harga_jual' => 15000000,
                'harga_beli' => 10000000,
                'created_at' => now(),
            ]
            
        ];
        DB::table('m_barang')->insert($data);
    }
}
