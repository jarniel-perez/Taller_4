<?php

namespace App\Http\Controllers;

use App\Pacientesmasculino;
use App\Pacientesfemenino;
use Illuminate\Http\Request;

class ControllerConsulta extends Controller
{
    public function insertar_create(){
      $pacientemasculino = Pacientesmasculino::find(3);
      $pacientemasculino->consultas()->create([
      'nombre_medico' => 'Andrea',
      'apellido_medico' => 'Martinez',
      'detalle_consulta' => 'paciente hipertenso',
    ]);

    return $pacientemasculino->consultas;

    }

    public function insertar_createMany(){
      $pacientesfemenino = Pacientesfemenino::find(5);
      $pacientesfemenino->consultas()->createMany([
        ['nombre_medico' => 'Rocío', 'apellido_medico' => 'Contreras', 'detalle_consulta' => 'se muere'],
        ['nombre_medico' => 'Natalia', 'apellido_medico' => 'Morales', 'detalle_consulta' => 'se vive'],
        ['nombre_medico' => 'Estefano', 'apellido_medico' => 'Carmona', 'detalle_consulta' => 'le quedan 5'],
      ]);

    return $pacientesfemenino->consultas;
    }

}
