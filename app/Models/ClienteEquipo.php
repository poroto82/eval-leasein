<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ClienteEquipo extends Pivot
{
    use HasFactory;
    protected $table='clientes_equipos';
}
