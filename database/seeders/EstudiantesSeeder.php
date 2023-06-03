<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EstudiantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estudiantes')->insert([
            ['rut'=>'72948231-3','nombre'=>'Jorge','apellido'=>'Ignacio','email'=>'jorgehood@gmail.com' ,'created_at'=>Carbon::now()],
            ['rut'=>'95824320-4','nombre'=>'Bag','apellido'=>'Darrel','email'=>'bagdarelll@hotmail.com','created_at'=>Carbon::now()],
            ['rut'=>'54790058-0','nombre'=>'Alvaro','apellido'=>'Jimenez','email'=>'soyeldiablo69@outlook.com','created_at'=>Carbon::now()],
            ['rut'=>'23563146-K','nombre'=>'Javier','apellido'=>'reivaJ','email'=>'javierita554@xd.com','created_at'=>Carbon::now()],
            ['rut'=>'76321114-2','nombre'=>'Pedro','apellido'=>'Pascal','email'=>'PedroPascalDeVerdad@lojuro.com','created_at'=>Carbon::now()],
        ]);
    }
}
