<x-backend-layout> 

<x-slot name="title"> 

Administration - {{Auth::user()->name}}

</x-slot>
<x-slot name="pagedescription"> User Management </x-slot>

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default bo-radius">
                <div class="panel-heading">
                    
                    <span class="pull-right clickable panel-toggle panel-button-tab-left hideme"><em class="fa fa-toggle-up"></em></span></div>
                    <div class="panel-body custom-body">
                         @livewire('usermanagement')                                   
                    </div>
                </div>
            </div>
</div>

</x-backend-layout>