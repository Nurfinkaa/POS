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
            // Supplier 1 - Kategori 1 (Makanan)
            ['barang_id' => 1, 'kategori_id' => 1, 'supplier_id' => 1, 'barang_kode' => 'MKN01', 'barang_nama' => 'Ciki Jetz', 'harga_beli' => 1000, 'harga_jual' => 2000],
            ['barang_id' => 2, 'kategori_id' => 1, 'supplier_id' => 1, 'barang_kode' => 'MKN02', 'barang_nama' => 'Chitato', 'harga_beli' => 8000, 'harga_jual' => 10000],
            ['barang_id' => 3, 'kategori_id' => 1, 'supplier_id' => 1, 'barang_kode' => 'MKN03', 'barang_nama' => 'Oreo', 'harga_beli' => 2000, 'harga_jual' => 3000],
            ['barang_id' => 4, 'kategori_id' => 1, 'supplier_id' => 1, 'barang_kode' => 'MKN04', 'barang_nama' => 'Beng-Beng', 'harga_beli' => 1500, 'harga_jual' => 2500],
            ['barang_id' => 5, 'kategori_id' => 1, 'supplier_id' => 1, 'barang_kode' => 'MKN05', 'barang_nama' => 'Taro', 'harga_beli' => 4000, 'harga_jual' => 5500],

            // Supplier 2 - Kategori 2 (Minuman)
            ['barang_id' => 6, 'kategori_id' => 2, 'supplier_id' => 2, 'barang_kode' => 'MNM01', 'barang_nama' => 'Aqua 600ml', 'harga_beli' => 2500, 'harga_jual' => 3500],
            ['barang_id' => 7, 'kategori_id' => 2, 'supplier_id' => 2, 'barang_kode' => 'MNM02', 'barang_nama' => 'Teh Botol', 'harga_beli' => 3000, 'harga_jual' => 4500],
            ['barang_id' => 8, 'kategori_id' => 2, 'supplier_id' => 2, 'barang_kode' => 'MNM03', 'barang_nama' => 'Coca Cola', 'harga_beli' => 5000, 'harga_jual' => 6500],
            ['barang_id' => 9, 'kategori_id' => 2, 'supplier_id' => 2, 'barang_kode' => 'MNM04', 'barang_nama' => 'Pocari Sweat', 'harga_beli' => 6000, 'harga_jual' => 7500],
            ['barang_id' => 10, 'kategori_id' => 2, 'supplier_id' => 2, 'barang_kode' => 'MNM05', 'barang_nama' => 'Susu Ultra', 'harga_beli' => 5500, 'harga_jual' => 7000],

            // Supplier 3 - Kategori 4 (Elektronik)
            ['barang_id' => 11, 'kategori_id' => 4, 'supplier_id' => 3, 'barang_kode' => 'ELK01', 'barang_nama' => 'Mouse Wireless', 'harga_beli' => 45000, 'harga_jual' => 60000],
            ['barang_id' => 12, 'kategori_id' => 4, 'supplier_id' => 3, 'barang_kode' => 'ELK02', 'barang_nama' => 'Keyboard Mech', 'harga_beli' => 250000, 'harga_jual' => 300000],
            ['barang_id' => 13, 'kategori_id' => 4, 'supplier_id' => 3, 'barang_kode' => 'ELK03', 'barang_nama' => 'Flashdisk 32GB', 'harga_beli' => 50000, 'harga_jual' => 75000],
            ['barang_id' => 14, 'kategori_id' => 4, 'supplier_id' => 3, 'barang_kode' => 'ELK04', 'barang_nama' => 'Earphone BK', 'harga_beli' => 25000, 'harga_jual' => 40000],
            ['barang_id' => 15, 'kategori_id' => 4, 'supplier_id' => 3, 'barang_kode' => 'ELK05', 'barang_nama' => 'Kabel Data Type-C', 'harga_beli' => 15000, 'harga_jual' => 25000],
        ];

        DB::table('m_barang')->insert($data);
    }
}
