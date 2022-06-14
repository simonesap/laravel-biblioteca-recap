<?php

use Illuminate\Database\Seeder;
use App\Models\Generi;

class GeneriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $generies = [
            [
                'genere'=>'horror',
            ],
            [
                'genere'=>'fantasy',
            ]

        ];

        foreach($generies as $gener){
            $new_generi = new Generi();
            $new_generi->generi = $gener['genere'];
            $new_generi->save();
        }

    }
}
