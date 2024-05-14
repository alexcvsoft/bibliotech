<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends User
{
    use HasFactory;

    protected $table = 'alumnos';

    protected $fillable = ['usuario_id',
                            'matricula',
                            'semestre', 
                            'nivel_academico_id'];

    /**
     * Obtener el Usuario asociado con el Alumno.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }

    /**
     * Obtener el Nivel Académico del Alumno
     */
    public function nivelAcademico()
    {
        return $this->belongsTo(NivelAcademico::class, 'nivel_academico_id');
    }
}
