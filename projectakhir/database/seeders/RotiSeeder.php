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
            'nama_roti' => 'Roti Bagel',
            'rasa_roti' => ' Keju'
        ]);

        roti::create([
            'nama_roti' => 'Roti Bagel',
            'rasa_roti' => ' Coklat'
        ]);

        roti::create([
            'nama_roti' => 'Roti Bagel',
            'rasa_roti' => ' Srikaya'
        ]);

        roti::create([
            'nama_roti' => 'Roti Bagel',
            'rasa_roti' => ' Kelapa'
        ]);

        roti::create([
            'nama_roti' => 'Roti Begel',
            'rasa_roti' => ' Nanas'
        ]);

        roti::create([
            'nama_roti' => 'Roti Bagel',
            'rasa_roti' => ' Meses Campur'
        ]);

        roti::create([
            'nama_roti' => 'Roti Bagel',
            'rasa_roti' => ' Stroberi'
        ]);

        roti::create([
            'nama_roti' => 'Roti Bagel',
            'rasa_roti' => ' Melon'
        ]);

        roti::create([
            'nama_roti' => 'Roti Bagel',
            'rasa_roti' => ' Meses Coklat'
        ]);
        
    }
}
