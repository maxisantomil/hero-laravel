<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //devuelve el id a 0
        DB::statement('SET FOREIGN_KEY_CHECKS = 0'); 

        //elimina datos 
        DB::table('levels')->truncate();

        $xp= 50;
       for ($i=0;$i < 10; $i++ ){
           $xp= $xp *2;

            //te permite insertar elementos en la base de datos 
           DB ::table('levels')->insert([
               "xp" => $xp
           ]);
       }
    }
}
