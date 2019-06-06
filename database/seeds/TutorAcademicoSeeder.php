<?php

use Illuminate\Database\Seeder;

class TutorAcademicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('TutorAcademico')->insert([
            'rpe'=>1,
            'Nombre'=>"Dr Hector Gerardo Perez Gonzalez",
            'password'=>"1",
        ]);
    }
}
