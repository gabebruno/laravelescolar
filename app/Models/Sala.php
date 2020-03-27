<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $fillable = [
        'descricao'
    ];

    public $timestamps = false;

    public function salauser()
    {
        return $this->belongsTo(SalaUser::class);
    }

    public function users()
    {
        return $this->belongsTo(Horario::class);
    }

    public function horario()
    {
        return $this->hasMany(Horario::class);
    }

}
