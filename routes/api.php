<?php

use Illuminate\Http\Request;
use App\Empleado;
//listar empleados 

Route::get('empleados', function(){
    $empleados = Empleado::get();
    return $empleados;
});

Route::post('empleados',function(Request $request){
    $empleado = new Empleado;
    $empleado->nombres = $request->input('nombres');
    $empleado->apellidos = $request->input('apellidos');
/*     $empleado->cedula = $request->input('cedula');
    $empleado->email = $request->input('email');
    $empleado->lugar_nacimiento = $request->input('lugar_nacimiento');
    $empleado->sexo = $request->input('sexo');
    $empleado->estado_civil = $request->input('estado_civil');
    $empleado->telefono = $request->input('telefono'); */
    $empleado-> save();
    return "usuario creado";
});