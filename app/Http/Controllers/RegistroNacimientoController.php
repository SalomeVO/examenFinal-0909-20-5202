<?php

namespace App\Http\Controllers;

use App\Models\registro_nacimiento;
use Illuminate\Http\Request;

class RegistroNacimientoController extends Controller
{

    public function index()
    {
        $registro =registro_nacimiento::all();
        return $registro;
    }


    public function create(Request $request)
    {
        $registro = $this->validate($request, [
            "id" => "required",
            "nombre" => "required",
            "peso" => "required",
            "fecha_hora_nacimiento" => "required",
            "color_de_ojos" => "required",
            "lunares"=> "required",
        ]);

        registro_nacimiento::create([
            "id" => $registro["id"],
            "nombre" => $registro["nombre"],
            "peso" => $registro["peso"],
            "fecha_hora_nacimiento" => $registro["fecha_hora_nacimiento"],
            "color_de_ojos" => $registro["color_de_ojos"],
            "lunares" => $registro["lunares"],
        ]);

        return response()->json([
            'Guardado exitosamente',
        ]);
    }

}
