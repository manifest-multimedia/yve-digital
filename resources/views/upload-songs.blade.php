
<x-backend-layout>
    <x-slot name="title"> YVE Digital Music Distribution Platform - {{Auth::user()->name}}</x-slot>
    <x-slot name="pagedescription">
        Upload Songs
    </x-slot>
    
    <div class="row">
        @livewire('uploadsongs')
    </div>

</x-backend-layout>