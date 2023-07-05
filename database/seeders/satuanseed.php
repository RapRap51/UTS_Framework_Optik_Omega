<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class satuanseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuans')->insert([
            [
                'code' => 'WF',
                'name' => 'Frame Wayfarer',
            ],
            [
                'code' => 'CE',
                'name' => 'Frame Cat Eye',
            ],
            [
                'code' => 'RL',
                'name' => 'Frame Rimless',
            ],
            [
                'code' => 'BL',
                'name' => 'Frame Bulat',
            ],
            [
                'code' => 'OZ',
                'name' => 'Frame Oversized',
            ],
        ]);

    }
}
