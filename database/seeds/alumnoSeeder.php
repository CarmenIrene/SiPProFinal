<?php

use Illuminate\Database\Seeder;

class alumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumno')->insert([
        	'claveUnica'=>"201627",
            'Nombre'=>"Carmen Irene Lozano Ruiz",
            'claveIngenieria'=>"201111400695",
            'carrera'=>"Informatica",
            'cicloEscolar'=>"2018-2019/II",
            'semestre'=>"10",
            'condicion'=>"Irregular",
            'Situacion'=>"Inscrito",
            'idTutorAcademico'=>"1",
            'password'=>"1234",
        ]);
    }
}
