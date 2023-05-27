<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfesoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profesores')->insert([
            ['rut'=>'34234567-2','nombre'=>'Albert','apellido'=>'Einstein','created_at'=>Carbon::now()],
            ['rut'=>'21446374-5','nombre'=>'Sebastian','apellido'=>'Bach','created_at'=>Carbon::now()],
            ['rut'=>'41621511-K','nombre'=>'Sam','apellido'=>'Fisher','created_at'=>Carbon::now()],
        ]);
    }
}
