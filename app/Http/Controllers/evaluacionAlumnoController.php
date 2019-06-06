<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TutorAcademico;
use App\Alumno;
use App\registroPracticas;
use Illuminate\Support\Carbon;
use App\Empresa;
use App\preguntasAlumno;
use App\respuestaAlumno;

use App\Reportes;

class evaluacionAlumnoController extends Controller
{
   public function evaluacionAlumno($claveUnica)
    {
    	$alumno=Alumno::where('claveUnica','=',$claveUnica)->first();
    	$tutor=TutorAcademico::where('id','=',$alumno->idTutorAcademico)->first();
        $solicitud = registroPracticas::where('claveUnica','=',$alumno->claveUnica)->first();
        $emp = Empresa::where('idEmpresa','=',$solicitud->idEmpresa)->first();
        $preguntas = preguntasAlumno::all();
        //dd($preguntas);
        //dd($preguntas);
        $fecha = Carbon::now()->formatLocalized('%A %d %B %Y');
    	return view('EvaluacionAlumnoEmpresa')->with('alumno',$alumno)->with('fecha',$fecha)->with('tutor',$tutor)->with('solicitud',$solicitud)->with('empresa',$emp)->with('preguntas',$preguntas);
    } 

    public function evaluacionEmpresa($claveUnica)
    {
    	$alumno=Alumno::where('claveUnica','=',$claveUnica)->first();
    	$tutor=TutorAcademico::where('id','=',$alumno->idTutorAcademico)->first();
        $solicitud = registroPracticas::where('claveUnica','=',$alumno->claveUnica)->first();
        $emp = Empresa::where('idEmpresa','=',$solicitud->idEmpresa)->first();
        
        $fecha = Carbon::now()->formatLocalized('%A %d %B %Y');
    	return view('EvaluacionEmpresaAlumno')->with('alumno',$alumno)->with('fecha',$fecha)->with('tutor',$tutor)->with('solicitud',$solicitud)->with('empresa',$emp);
    } 

    public function GuardaEvaluacion($claveUnica)
    {
        $alumno = registroPracticas::where('claveUnica','=',$claveUnica)->first();
        //dd($alumno);

    	$actPrinc = request('actividadPrincipal');
    	$relAct = request('relacionActividad');
    	$intAsesor = request('interaccionAsesor');
    	$aseAsesor = request('asesoriaAsesor');
    	$aseDireccion = request('asesoriaDireccion');
    	$aseIngenieros = request('asesoriaIngenieros');
    	$asePersonalT = request('asesoriaPersonalT');
    	$dispoMaterial = request('dispMateriales');
    	$dispoRecursos = request('dispRecursos');
    	$dispoEquipo = request('dispEquipo');
        $segDes = request('segDesarrollo');
        $actPer = request('actPersonal');
        $eco = request('economica');
        $recoEmp = request('recoEmpresa');
        $recoExp = request('recoExperiencia');
        $comenAdi = request('comentariosAd');

    	$respEvAlumno =  new respuestaAlumno();

    	$respEvAlumno->idRegistroPracticas = $alumno->idRegistroPracticas;
    	$respEvAlumno->r1 = $actPrinc;
    	$respEvAlumno->r2 = $relAct;
    	$respEvAlumno->r3 = $intAsesor;
    	$respEvAlumno->r4 = $aseAsesor;
    	$respEvAlumno->r5 = $aseDireccion;
    	$respEvAlumno->r6 = $aseIngenieros;
    	$respEvAlumno->r7 = $asePersonalT;
    	$respEvAlumno->r8 = $dispoMaterial;
    	$respEvAlumno->r9 = $dispoRecursos;
    	$respEvAlumno->r10 = $dispoEquipo;
        $respEvAlumno->r11 = $segDes;
        $respEvAlumno->r12 = $actPer;
        $respEvAlumno->r13 = $eco;
        $respEvAlumno->r14 = $recoEmp;
        $respEvAlumno->r15 = $recoExp;
        $respEvAlumno->r16 = $comenAdi;

    	$respEvAlumno->save();

        return redirect('menuAlumno/'.$alumno->claveUnica);
    }
}
