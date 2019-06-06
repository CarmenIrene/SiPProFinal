<?php

use Illuminate\Database\Seeder;

class EncargadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Encargado')->insert([
            'rpe'=>"2",
            'Nombre'=>"Dr Emilio",
            'password'=>"2",
        ]);
        
    }
}
