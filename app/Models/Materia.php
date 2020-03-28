<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $fillable = [
        'descricao', 'user_id'
    ];

    public $timestamps = false;

    public function nota()
    {
        return $this->hasMany(Nota::class);
    }

    public function horario()
    {
        return $this->hasMany(Horario::class);
    }

    public function sala()
    {
        return $this->belongsToMany(Sala::class, 'horarios');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
