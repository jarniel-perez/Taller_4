<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pacientesmasculino extends Model
{
  protected $table = 'Pacientesmasculinos';

  protected $fillable = [
    'nombre', 'apellido', 'edad', 'telefono', 'email',
  ];

  public function consultas(){
    return $this->morphMany('App\Consulta', 'consultable');
  }
}
