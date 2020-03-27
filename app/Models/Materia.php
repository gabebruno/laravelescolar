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

}
