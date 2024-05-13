<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PalabraClave extends Model
{
    use HasFactory;

    protected $table = 'palabras_clave';

    protected $fillable = ['palabra'];

    // Definir la relacion con los documentos
    public function documentos()
    {
        return $this->belongsToMany(Documento::class, 'palabras_clave_documentos', 'palabra_clave_id', 'documento_id');
    }
}
