<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PropuestasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('propuestas')->insert([
            ['fecha'=>Carbon::now(),'documento'=>'www.google1.com','estado'=> 1, 'estudiante_rut'=>'54790058-0'],
            ['fecha'=>Carbon::now(),'documento'=>'www.google2.com','estado'=> 1, 'estudiante_rut'=>'54790058-0'],
            ['fecha'=>Carbon::now(),'documento'=>'www.google3.com','estado'=> 1, 'estudiante_rut'=>'54790058-0'],
            ['fecha'=>Carbon::now(),'documento'=>'www.foreal.com','estado'=> 1, 'estudiante_rut'=>'72948231-3'],
            ['fecha'=>Carbon::now(),'documento'=>'www.foreal2.com','estado'=> 1, 'estudiante_rut'=>'54790058-0'],
        ]);
    }
}
