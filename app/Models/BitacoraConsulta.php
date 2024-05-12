<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BitacoraConsulta extends Model
{
    use HasFactory;

    protected $fillable = ['documento_id', 'usuario_id'];

    // Define relaciones
    public function documento()
    {
        return $this->belongsTo(Documento::class);
    }

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
