<div class="col-span-12">
    <div class="flex">
        <div class="w-1/2 p-2">
            <x-label for="autor" value="{{ __('Autor') }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300" />
            <x-input id="autor" type="text" class="mt-1 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required/>
            <x-input-error for="autor" class="mt-2" />
        </div>
    </div>
    <div class="flex">
        <div class="w-1/2 p-2">
            <x-label for="titulo" value="{{ __('Título') }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300" />
            <x-input id="titulo" type="text" class="mt-1 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required/>
            <x-input-error for="titulo" class="mt-2" />
        </div>
        <div class="w-1/2 p-2">
            <x-label for="editorial" value="{{ __('Editorial') }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300" />
            <x-input id="editorial" type="text" class="mt-1 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required/>
            <x-input-error for="editorial" class="mt-2" />
        </div>
    </div>
    <div class="flex">
        <div class="w-1/2 p-2">
            <x-label for="tipo_documento_id" value="{{ __('Tipo de Documento') }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300" />
            <x-input id="tipo_documento_id" type="text" class="mt-1 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required/>
            <x-input-error for="tipo_documento_id" class="mt-2" />
        </div>
        <div class="w-1/2 p-2">
            <x-label for="fecha_publicacion" value="{{ __('Fecha de Publicación') }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300" />
            <x-input id="fecha_publicacion" type="text" class="mt-1 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required/>
            <x-input-error for="fecha_publicacion" class="mt-2" />
        </div>
    </div>
    <div class="flex">
        <div class="w-full p-2">
            <x-label for="descripcion" value="{{ __('Descripción') }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300" />
            <textarea id="descripcion" style="background-color: rgb(17 24 39);" class="mt-1 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md resize-y dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300" rows="4" required></textarea>
            <x-input-error for="descripcion" class="mt-2" />
        </div>
    </div>
    <div class="flex">
        <div class="w-1/2 p-2">
            <x-label for="archivo_documento" value="{{ __('Archivo') }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300" />
            <x-input id="archivo_documento" type="text" class="mt-1 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required/>
            <x-input-error for="archivo_documento" class="mt-2" />
        </div>
        <div class="w-1/2 p-2">
            <x-label for="portada_documento" value="{{ __('Portada') }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300" />
            <x-input id="portada_documento" type="text" class="mt-1 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required/>
            <x-input-error for="portada_documento" class="mt-2" />
        </div>
    </div>
</div>