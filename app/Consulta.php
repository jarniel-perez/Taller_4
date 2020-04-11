<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $table = 'consultas';

    protected $fillable = [
      'nombre_medico', 'apellido_medico', 'detalle_consulta', 'consultable_id', 'consultable_type',
    ];

    public function consultable(){
      return $this->morphTo();
    }
}
