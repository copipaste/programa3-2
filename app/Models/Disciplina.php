<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'capacidad',
    ];

    public function membresias()
    {
        return $this->belongsToMany(Membresia::class, 'englobas', 'Id_disciplina', 'Id_membresia');
    }
    public function horario_disciplinas()
    {
        return $this->hasMany(Horario_disciplina::class, 'id_disciplina', 'id');
    }
}
