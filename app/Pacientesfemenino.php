<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pacientesfemenino extends Model
{
    protected $table = 'Pacientesfemeninos';

    protected $fillable = [
      'nombre', 'apellido', 'edad', 'telefono', 'email',
    ];

    public function consultas(){
      return $this->morphMany('App\Consulta', 'consultable');
    }
}
