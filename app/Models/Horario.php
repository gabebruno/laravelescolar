<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $fillable = [
        'materia_id', 'sala_id',  'exercicio', 'horainicio', 'horafim'
    ];

    public $timestamps = false;


}
