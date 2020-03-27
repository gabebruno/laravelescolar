<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $fillable = [
        'salauser_id', 'materia_id',  'nota1bi', 'nota2bi', 'nota3bi', 'nota4bi'
    ];

    public $timestamps = false;

    public function salauser()
    {
        return $this->hasMany(SalaUser::class);
    }

    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }
}
