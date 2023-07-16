<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;



class User extends Authenticatable 
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    //agregado para el manejo de roles y permisos 
     

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nro_carnet',
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'telefono_principal',
        'telefono_emergencia',
        'email',
        'sexo',
        'tipo_sangre',
        'peso',
        'direccion',
        'password',
        'id_tarjeta',
        'id_rol',
        'id_periodo',
        'id_membresia',
        'descripcion',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    //esto es el cambio que hice 
    public function membresia()
    {
        return $this->belongsTo(Membresia::class, 'idMembresia');
    }
    
    //esto es el cambio que hice 

}
