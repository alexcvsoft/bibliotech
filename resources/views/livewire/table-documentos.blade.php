<div>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="flex flex-row justify-between items-center">
                    <div class="mb-5">
                        <a href="{{ route('documentos.create') }}" class="bg-cyan-500 hover:bg-cyan-700 text-white font-bold py-2 px-4 rounded">Crear Documento</a>
                    </div>
                    <div class="mb-5 flex items-center">
                        
                        <input type="text" wire:model.live.debounce.250ms="search" id="searchInput" placeholder="Buscar..." class="dark:bg-gray-800 dark:text-white py-2 px-4 border rounded-md">
                    </div>
                </div>
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 text-gray-900 dark:text-white" style="text-align: left;">ID</th>
                            <th class="px-4 py-2 text-gray-900 dark:text-white" style="text-align: left;">Autor</th>
                            <th class="px-4 py-2 text-gray-900 dark:text-white" style="text-align: left;">Título</th>
                            <th class="px-4 py-2 text-gray-900 dark:text-white" style="text-align: left;">Editorial</th>
                            <th class="px-4 py-2 text-gray-900 dark:text-white" style="text-align: left;">Fecha de Publicación</th>
                            <th class="px-4 py-2 text-gray-900 dark:text-white" style="text-align: left;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($registros as $items)
                        <tr class="odd:bg-white even:bg-slate-50 dark:odd:bg-gray-700 dark:even:bg-gray-600">
                            <td class="px-4 py-2 text-gray-900 dark:text-white text-left">{{ $items->id }}</td>
                            <td class="px-4 py-2 text-gray-900 dark:text-white text-left">{{ $items->autor_id }}</td>
                            <td class="px-4 py-2 text-gray-900 dark:text-white text-left">{{ $items->titulo }}</td>
                            <td class="px-4 py-2 text-gray-900 dark:text-white text-left">{{ $items->editorial }}</td>
                            <td class="px-4 py-2 text-gray-900 dark:text-white text-left">{{ $items->fecha_publicacion }}</td>
                            <td class="px-4 py-2 text-gray-900 dark:text-white text-left"></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $registros->links() !!}
            </div>
        </div>
    </div>




</div>
