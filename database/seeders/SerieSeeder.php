<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Serie;

class SerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Serie::insert([
            [
                'name' => 'Lupin'
            ],
            [
                'name' => 'Skins'
            ],
            [
                'name' => 'Breaking Bad'
            ]
            ]);
    }
}
