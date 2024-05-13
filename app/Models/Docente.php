<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends User
{
    use HasFactory;

    protected $table = 'docentes';

    protected $fillable = ['usuario_id', 
                            'materia_impartida_id'];
    
    /**
     * Obtener el Usuario asociado con el Docente
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }

    /**
     * Obtener la Materia que imparte el Docente
     */
    public function materia()
    {
        return $this->belongsTo(Materia::class, 'materia_impartida_id');
    }

}
