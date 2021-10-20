<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Reserva;
use App\Models\Hotel;
use App\Models\Tipo_habitacion;

class Habitacion extends Model
{
    protected $table = 'habitaciones';
    
    public function reservas(){
        return $this->hasMany(Reserva::class);
    }

    public function hotel(){
        return $this->belongsTo(Hotel::class);
    }

    public function tipo(){
        return $this->belongsTo(Tipo_habitacion::class);
    }
}
