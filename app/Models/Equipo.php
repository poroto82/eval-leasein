<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    public function tipoProcesador(){
        return $this->hasOne(TipoProcesador::class,'id');
    }

    public function tipoMarca(){
        return $this->hasOne(TipoMarca::class,'id');
    }

    public function tipoEquipo(){
        return $this->hasOne(TipoEquipo::class,'id');
    }
}
