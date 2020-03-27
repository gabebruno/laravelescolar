<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalaUser extends Model
{
    protected $fillable = [
        'user_id', 'sala_id', 'exercicio'
    ];

    public $timestamps = false;


    public function salas()
    {
        return $this->hasMany(Sala::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sala()
    {
        return $this->belongsTo(Sala::class);
    }

    public function notas()
    {
        return $this->hasMany(Nota::class);
    }

}

