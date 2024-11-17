<?php

namespace App\Http\Controllers;

use App\Models\Ingreso;
use Illuminate\Http\Request;

class IngresoController extends Controller
{
    //
    public function __invoke()
    {
        //return 'vista principal de ingresos';
        //$ingreso = Ingreso::where('tipo_ingreso, '', 'EMERGENCIA');
        $ingresos1=Ingreso::where("tipo_ingreso", "like", "EMERGENCIA")->where("estatus", "=", "INGRESO")->whereMonth("fecha_ingreso", "11")->count();
        $ingresos2=Ingreso::where("tipo_ingreso", "like", "EMERGENCIA")->whereDay("fecha_ingreso", "11")->count(); 
        $ingresos3=Ingreso::where("tipo_ingreso", "like", "EMERGENCIA")->where("estatus","=","INGRESO")->count(); 
        $ingresos4=Ingreso::where("tipo_ingreso", "like", "EMERGENCIA")->where("estatus","=","EGRESO")->count();  
        
        return view('ingreso', compact("ingresos1","ingresos2", "ingresos3", "ingresos4"));
    }

}
