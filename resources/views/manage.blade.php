<x-backend-layout> 

    <x-slot name="title"> Administration - {{Auth::user()->name}}</x-slot>

<x-slot name="pagedescription"> Manager </x-slot>


@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main menu-sidearea custom-main-box">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default bo-radius">
                <div class="panel-heading">
                    <div class="heading-bar">
                        <div class="greetings">
                            <h1 class="greet">Howdy {{getFirstName(Auth::user()->name)}}!</h1>
                            <small> You are logged in as an Administrator. </small>
                        </div>
                        
                    </div>
                    
                  

                    {{-- <span class="pull-right clickable panel-toggle panel-button-tab-left hideme"><em class="fa fa-toggle-up"></em></span></div> --}}
                    <div class="panel-body custom-body">                                
                                @livewire('updateroyalties')
                    </div>
                </div>
            </div>
    </div><!--/.row-->

   

    
</div><!--/.row-->
</x-backend-layout>