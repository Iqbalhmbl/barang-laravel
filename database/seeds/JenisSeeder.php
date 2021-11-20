<?php
use App\Jenis;
use Illuminate\Database\Seeder;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jenis::create([
            'kode_jenis' => 'A-291',
            'nama_jenis' => 'Elektronik'
        ]);

        Jenis::create([
            'kode_jenis' => 'A-292',
            'nama_jenis' => 'Rumah Tangga'
        ]);

        Jenis::create([
            'kode_jenis' => 'A-293',
            'nama_jenis' => 'Pakaian'
        ]);

        Jenis::create([
            'kode_jenis' => 'A-291',
            'nama_jenis' => 'Olahraga'
        ]);

        Jenis::create([
            'kode_jenis' => 'A-291',
            'nama_jenis' => 'Sekolah/Pendidikan'
        ]);

    }
}
