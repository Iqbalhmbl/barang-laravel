<?php
use App\Barang;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barang::create([
            'kode_barang' => 'B-01',
            'jenis_id' => '1',
            'nama_barang' => 'Samsung A12',
            'harga_barang' => '2500000',
            'stock_barang' => '7',
            'keterangan' => 'Samsung Galaxy A12 merupakan handphone HP dengan kapasitas 5000mAh dan layar 6.5" yang dilengkapi dengan kamera belakang 48 + 2 + 2MP dengan tingkat densitas piksel sebesar 264ppi dan tampilan resolusi sebesar 720 x 1600pixels.'
        ]);

        Barang::create([
            'kode_barang' => 'B-02',
            'jenis_id' => '2',
            'nama_barang' => 'Kasur Spring Bed',
            'harga_barang' => '3500000',
            'stock_barang' => '10',
            'keterangan' => 'Disebut juga kasur pegas dan bisa dikatakan merupakan jenis kasur paling umum di Indonesia. Saat ditanya soal kasur, mayoritas orang Indonesia seringkali terpikirkan spring bed sebagai pilihan pertamanya. Ditandai dengan namanya.'
        ]);

        Barang::create([
            'kode_barang' => 'B-03',
            'jenis_id' => '3',
            'nama_barang' => 'Jaket',
            'harga_barang' => '200000',
            'stock_barang' => '10',
            'keterangan' => 'Jaket adalah baju luar yang panjangnya hingga pinggang atau pinggul, dipakai untuk menahan angin dan cuaca dingin'
        ]);

        Barang::create([
            'kode_barang' => 'B-04',
            'jenis_id' => '4',
            'nama_barang' => 'Sepatu Bola Nike Superfly',
            'harga_barang' => '1700000',
            'stock_barang' => '10',
            'keterangan' => 'sepatu bola Nike Mercurial boots superfly termurah keren'
        ]);

        Barang::create([
            'kode_barang' => 'B-05',
            'jenis_id' => '5',
            'nama_barang' => 'Buku Paket',
            'harga_barang' => '50000',
            'stock_barang' => '10',
            'keterangan' => 'Buku'
        ]);

    }
}
