<?php

namespace Database\Seeders;

use App\Models\Perpustakaan;
use Illuminate\Database\Seeder;

class PerpustakaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs1 = new perpustakaan();
        $mhs1->nbi = "1461800023";
        $mhs1->nama_mhs = "Yoga Tri Ghinanafsi";
        $mhs1->save();
    }
}