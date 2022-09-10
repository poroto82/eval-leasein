<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    public function equipos(){
        return $this->belongsToMany(Equipo::class,'clientes_equipos')->withPivot('fecha_desde');
    }

    public function tipoTamanio(){
        return $this->hasOne(TipoTamanio::class,'id');
    }

    public function tipoSector(){
        return $this->hasOne(TipoSector::class,'id');
    }
}
