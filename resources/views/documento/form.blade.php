<div class="space-y-6">
    <div class="flex">
        <div class="w-1/2 px-2">
            <x-label for="autor_id" value="Autor"/>
            <x-input id="autor_id" name="autor_id" type="text" class="mt-1 block w-full" value="" placeholder="Autor"/>
            <x-input-error for="autor_id" class="mt-2"/>
        </div>
    </div>
    <div class="flex">
        <div class="w-1/2 px-2">
            <x-label for="titulo" value="Titúlo"/>
            <x-input id="titulo" name="titulo" type="text" class="mt-1 block w-full" value="" placeholder="Titúlo"/>
            <x-input-error for="titulo" class="mt-2"/>
        </div>
        <div class="w-1/2 px-2">
            <x-label for="editorial" value="Editorial"/>
            <x-input id="editorial" name="editorial" type="text" class="mt-1 block w-full" value="" placeholder="Editorial"/>
            <x-input-error for="editorial" class="mt-2"/>
        </div>
    </div>
    <div class="flex">
        <div class="w-1/2 px-2">
            <x-label for="tipo_documento_id" value="Tipo Documento Id"/>
            <x-input id="tipo_documento_id" name="tipo_documento_id" type="text" class="mt-1 block w-full" value="" placeholder="Tipo Documento Id"/>
            <x-input-error for="tipo_documento_id" class="mt-2"/>
        </div>
        <div class="w-1/2 px-2">
            <x-label for="fecha_publicacion" value="Fecha Publicación"/>
            <x-input id="fecha_publicacion" name="fecha_publicacion" type="text" class="mt-1 block w-full" value="" placeholder="Fecha Publicación"/>
            <x-input-error for="fecha_publicacion" class="mt-2"/>
        </div>
    </div>
    <div class="flex">
        <div class="w-full px-2">
            <x-label for="descripcion" value="Descripción"/>
            <x-textarea id="descripcion" name="descripcion" type="text" class="mt-1 block w-full" value="" placeholder="Descripción" rows="4"/>
            <x-input-error for="descripcion" class="mt-2"/>
        </div>
    </div>
{{-- line a de lo nuevo --}}
    <div class="flex">
        <div class="w-full px-2">
            <x-label for="archivo_documento" value="Archivo"/>
            <x-file id="archivo_documento" name="archivo_documento" type="text" class="mt-1 block w-full" value="" placeholder="Archivo Documento"/>
            <x-input-error for="archivo_documento" class="mt-2"/>
        </div>
        <div class="w-full px-2">
            <x-label for="portada_documento" value="Portada"/>
            <x-file id="portada_documento" name="portada_documento" type="text" class="mt-1 block w-full" value="" placeholder="Portada Documento"/>
            <x-input-error for="portada_documento" class="mt-2"/>
        </div>
    </div>
    <br>
    <div class="flex justify-center items-center gap-6 w-full">
        <x-button-success>Agregar</x-button-success>
    </div>
</div>