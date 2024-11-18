<?php

namespace App\Http\Controllers;

use App\Models\Ingreso;
use Illuminate\Support\Facades\DB;//Probando
use Illuminate\Http\Request;

class IngresoController extends Controller
{
    //
    public function __invoke()
    {
        $mes=date("m");
        $dia=17;//date("d");
        $fecha=date("Y-m-d");
        //return 'vista principal de ingresos';
        //$ingreso = Ingreso::where('tipo_ingreso, '', 'EMERGENCIA');
        //$ingresos1=Ingreso::where("tipo_ingreso", "like", "EMERGENCIA")->where("estatus", "=", "INGRESO")->whereMonth("fecha_ingreso", "$mes")->count();
        $ingresos1=Ingreso::join("ingreso_log_cambio_areas","ingresos.id_ingreso","=", "ingreso_log_cambio_areas.id_ingreso")->where("tipo_ingreso", "like", 
        "EMERGENCIA")->where("estatus", "=", "INGRESO")->whereMonth("fecha_ingreso", "$mes")->count();
        $ingresos2=Ingreso::join("ingreso_log_cambio_areas","ingresos.id_ingreso","=", "ingreso_log_cambio_areas.id_ingreso")->where("tipo_ingreso", "like", 
        "EMERGENCIA")->where("estatus", "=", "INGRESO")->whereDay("fecha_ingreso", "$dia")->count();
        $ingresos3=Ingreso::join("ingreso_log_cambio_areas","ingresos.id_ingreso","=", "ingreso_log_cambio_areas.id_ingreso")->where("tipo_ingreso", "like", 
        "EMERGENCIA")->where("estatus", "=", "INGRESO")->count(); 
        $ingresos4=Ingreso::join("ingreso_log_cambio_areas","ingresos.id_ingreso","=", "ingreso_log_cambio_areas.id_ingreso")->where("tipo_ingreso", "like", 
        "EMERGENCIA")->where("estatus","=","EGRESO")->count();  
        
        return view('ingreso', compact("ingresos1","ingresos2", "ingresos3", "ingresos4","fecha"));
    }

}
