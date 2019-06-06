<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PreguntasAlumno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntasAlumno', function (Blueprint $table) {
        /**para crear los datos en la base de datos*/ 
            $table->increments('idPreguntas');  
            $table->string('p1')->default('1. Actividad principal que desarrollo el alumno'); 
            $table->string('p2')->default('2. Relación de la actividad con la carrera'); 
            $table->string('p3')->default('3. Interacción con el Asesor de la Empresa'); 
            $table->string('p4')->default('4. Asesoría por parte del Asesor de la Empresa'); 
            $table->string('p5')->default('5. Asesoría por parte de la dirección de la Empresa'); 
            $table->string('p6')->default('6. Asesoría por parte de otros ingenieros de la Empresa'); 
            $table->string('p7')->default('7. Asesoría por parte del personal técnico de la Empresa'); 
            $table->string('p8')->default('8. Disponibilidad de materiales básicos para la actividad'); 
            $table->string('p9')->default('9. Disponibilidad de herramienta informáticas para la actividad'); 
            $table->string('p10')->default('10. Disponibilidad de equipo para la actividad'); 
            $table->string('p11')->default('11. Seguridad para el desarrollo de actividades'); 
            $table->string('p12')->default('12. Actividad respetuosa por parte del personal de la Empresa'); 
            $table->string('p13')->default('13. ¿Recibiste renumeración económica? 1: Si, 2: No'); 
            $table->string('p14')->default('14. ¿Recomendarías esta Empresa a otros compañeros, para que realicen su estancia profesional? 1: Si, 2: No'); 
            $table->string('p15')->default('15. ¿Recomendaciones para el mejoramiento de la experiencia del practicante en la Empresa?'); 
            $table->string('p16')->default('16. Comentarios Adicionales'); 
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       
        Schema::dropIfExists('preguntasAlumno');
    }
}
