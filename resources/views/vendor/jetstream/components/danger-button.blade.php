<button {{ $attributes->merge(['type' => 'button', 'class' => 'btn btn-danger inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition']) }} style="padding: 10px 20px 10px 20px; margin:10px 0 10px 0">
    {{ $slot }}
</button>
