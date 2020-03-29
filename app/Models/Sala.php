<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $fillable = [
        'descricao',
        'ensino'
    ];

    public $timestamps = false;

    public function salauser()
    {
        return $this->belongsTo(SalaUser::class);
    }

    public function alunos()
    {
        return $this->belongsToMany(User::class, 'sala_users');
    }

    public function horario()
    {
        return $this->hasMany(Horario::class)->with('user');
    }

}
