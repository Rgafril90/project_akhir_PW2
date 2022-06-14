<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\belanja;

class BelanjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        belanja::create([
            'stock_id' => '1',
            'tanggal' => '2022-06-11'
        ]); 
    }
}
