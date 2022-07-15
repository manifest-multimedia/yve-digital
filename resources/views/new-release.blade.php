

<x-backend-layout>
    <x-slot name="title"> Dashboard - {{Auth::user()->name}} </x-slot>
    <x-slot name="pagedescription">
        Create Release
    </x-slot>

@section('content')

    <div class="row">
        <div class="col-md-12">
		    @livewire('createrelease')                       
        </div>
    </div>
   
</x-backend-layout>