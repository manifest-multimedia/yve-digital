<x-backend-layout>
    <x-slot name="title"> YVE Digital Music Distribution Platform </x-slot>
    <x-slot name="pagedescription">
        Royalties Earned <span style="float:right">${{$revenue}} USD</span>
    </x-slot>
    <div class="row">
        @livewire('royaltiestable')     
    </div>
</x-backend-layout>