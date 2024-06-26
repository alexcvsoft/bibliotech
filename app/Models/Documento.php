<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;

    protected $table = 'documentos';

    protected $fillable = [
        'autor_id',
        'titulo',
        'editorial',
        'descripcion',
        'tipo_documento_id',
        'fecha_publicacion',
        'archivo_documento',
        'portada_documento',
    ];

    // Definir la relación con la tabla autor
    public function autor()
    {
        return $this->belongsTo(Autor::class);
    }

    // Definir la relación de tipo de documento
    public function tipoDocumento()
    {
        return $this->belongsTo(TipoDocumento::class);
    }

    // Definir la relación con las palabras clave
    public function palabrasClave()
    {
        return $this->belongsToMany(PalabraClave::class, 'palabras_clave_documentos', 'documento_id', 'palabra_clave_id');
    }

    
}
