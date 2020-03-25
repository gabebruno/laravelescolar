<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'titulo', 'corpo', 'categoria', 'datainicio', 'dataFim',
    ];

    public $timestamps = false;
}

