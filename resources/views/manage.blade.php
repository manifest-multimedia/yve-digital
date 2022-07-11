<x-backend-layout> 

    <x-slot name="title"> Administration - {{Auth::user()->name}}</x-slot>

<x-slot name="pagedescription"> Manager </x-slot>

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel-body custom-body">  
                <div class="card">
                    <div class="card-header">        
                        <h1> Record Royalties </h1>   
                        <h1 class="card-title">Howdy {{getFirstName(Auth::user()->name)}}!</h1>
                        <small> You are logged in as an Administrator. </small>
                    </div>

                    <div class="card-body m-1">
                        @livewire('updateroyalties')    
                    </div>
                </div>                              
            </div> 
    </div>

</x-backend-layout>