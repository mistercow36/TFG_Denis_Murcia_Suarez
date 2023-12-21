<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class marcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $marcas = ['Asus','Gigabyte','MSI','AMD','Intel','Aourus','CoolMaster','HyperX','Toshiba','Samsung','NZXT','Corsair'];

        foreach($marcas as $marca){
            DB::table('marcas')->insert([
                'nombre' => $marca
            ]);
        }
    }
}
