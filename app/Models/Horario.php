<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $fillable = [
        'materia_id', 'sala_id',  'exercicio', 'horainicio', 'horafim'
    ];

    public $timestamps = false;

    public function sala()
    {
        return $this->belongsTo(Sala::class, 'sala_id');
    }

    public function materia()
    {
        return $this->belongsTo(Materia::class, 'materia_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


}
