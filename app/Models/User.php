<?php

namespace App\Models;

use App\Http\Controllers\TipoUsuarioController;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'cpf', 'email', 'telefone', 'endereco', 'password', 'tipo_id'
    ];

    public $timestamps = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function salauser()
    {
        return $this->hasMany(SalaUser::class);
    }

    public function salas()
    {
        return $this->belongsToMany(Sala::class, 'sala_users');
    }

    public function materia()
    {
        return $this->hasMany(Materia::class);
    }

    public function tipousuario()
    {
        return $this->belongsTo(TipoUsuario::class, 'tipo_id');
    }

}
