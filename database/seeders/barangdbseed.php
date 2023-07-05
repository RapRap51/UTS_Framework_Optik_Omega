<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barangdbseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangdbs')->insert([
            [
                'kode_barang' => 'KCA-D421',
                'name_barang' => 'Frame anak',
                'deskripsi' => 'Include lensa',
                'stok' => 20,
                'harga' => 200000,
                'satuan_id' => 1
            ],
        ]);
    }
}
