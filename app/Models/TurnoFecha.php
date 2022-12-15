<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TurnoFecha extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha',
        'cant_asistencia',
        'turno_id',
    ];
}
