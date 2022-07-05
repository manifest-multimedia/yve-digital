<x-backend-layout>

    <x-slot name="title"> 
    
    Dashboard - {{Auth::user()->name}}
    
    </x-slot>
    
    <x-slot name="pagedescription"> Account Recovery </x-slot>

    <x-account-recovery-module />

</x-backend-layout>