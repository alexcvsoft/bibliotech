<!-- resources/views/components/success-button.blade.php -->
@props(['type' => 'submit'])

<button type="{{ $type }}" {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-600 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 active:bg-green-700 transition']) }}>
    {{ $slot }}
</button>
