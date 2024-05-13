<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investigador extends User
{
    use HasFactory;

    protected $fillable = ['usuario_id', 
                            'procedencia'];

    /**
     * Obtener el Usuario asociado con el Investigador
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }
}
