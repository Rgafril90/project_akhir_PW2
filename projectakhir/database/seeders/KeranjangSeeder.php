<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\keranjang;

class KeranjangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        keranjang::create([
            'stock_id' => '4',
            'jumlah' => '10'
        ]);
    }
}
