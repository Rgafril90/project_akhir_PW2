<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\pembeli;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        pembeli::create(
            [
                'Nama' => 'Riganda Saputra',
                'alamat'=> 'Griya Albaria 1',
                'Gmail' => 'rigandas990@gmail.com',
                'No_telp' => '081279084442'
            ]
            );
    }
}
