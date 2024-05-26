<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Documento;
use Livewire\WithPagination; // lib de paginado

class TableDocumentos extends Component
{
    use WithPagination;
    // variables de la páginación
    public $perPage = 10;
    public $page = 1;

    // campos filtrables
    public $search = '';

    public function render()
    {
        $query = Documento::select(
            'id',
            'autor_id', 
            'titulo',
            'editorial', 
            'fecha_publicacion',
        )
        ->when($this->search, function ($param) {
            $param->where('titulo', 'like', '%' . $this->search . '%')
                ->orWhere('editorial', 'like', '%' . $this->search . '%');
        });

        // carga de registros
        $registros = $query->paginate($this->perPage);
        if ($this->page > $registros->lastPage()) { // vuelve a la página 1 si hay pocos registros
            $this->page = 1;
            $registros = $query->paginate($this->perPage, ['*'], 'page', $this->page);
        }

        return view('livewire.table-documentos', compact('registros'))
        ->with('i',  ($registros->currentPage() - 1) * $registros->perPage());
    }
}
