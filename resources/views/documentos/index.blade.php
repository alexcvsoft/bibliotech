<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Documentos') }}
        </h2>
    </x-slot>
    <!-- Inico del contenido -->

    @livewire('table-documentos')
    
    <!-- Fin del contenido -->
</x-app-layout>