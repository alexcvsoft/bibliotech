<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Agregar Documento') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xs mx-auto sm:px-6 lg:px-8"> <!-- Cambiado a max-w-xs para hacerlo más estrecho -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200 dark:bg-gray-800">
                    <form method="POST" action="{{ route('documentos.store') }}"  role="form" enctype="multipart/form-data">
                        @csrf

                        @include('documentos.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
