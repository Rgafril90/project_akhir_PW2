<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\roti;

class RotiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        roti::create([
            'nama_roti' => 'Roti Begel',
            'rasa_roti' => ' Keju'
        ]);

        roti::create([
            'rasa_roti' => ' Coklat'
        ]);
    }
}
