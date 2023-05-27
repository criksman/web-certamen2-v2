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
            ['rut'=>'72948231-3','nombre'=>'Jorge','apellido'=>'Hood','email'=>'jorgehood@gmail.com' ,'created_at'=>Carbon::now()],
            ['rut'=>'95824320-4','nombre'=>'Bag','apellido'=>'Darrel','email'=>'bagdarelll@hotmail.com','created_at'=>Carbon::now()],
            ['rut'=>'54790058-0','nombre'=>'XxMatadaorPVP69xX','apellido'=>'Garcoa','email'=>'xxXDIABLOXxx@outlook.com','created_at'=>Carbon::now()],
        ]);
    }
}
