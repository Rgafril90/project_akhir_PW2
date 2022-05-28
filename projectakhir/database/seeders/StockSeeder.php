<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\stock;
use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        stock::create(
            [
                'nama_roti' => 'roti borgil',
                'Rasa_roti' => 'Rasa Coklat'
            ]
            );
    }
}
