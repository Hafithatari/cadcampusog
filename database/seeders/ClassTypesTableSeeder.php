<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_types')->delete();

        $data = [
            ['name' => 'Autocad MEP', 'code' => 'C'],
            ['name' => 'Revit Mep', 'code' => 'PN'],
            ['name' => '3DS Max', 'code' => 'N'],
            ['name' => 'Navis Pro', 'code' => 'P'],
            ['name' => 'Autocad crash', 'code' => 'J'],
            ['name' => 'RevitMEP crash', 'code' => 'S'],
        ];

        DB::table('class_types')->insert($data);

    }
}
