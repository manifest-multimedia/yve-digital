<x-backend-layout> 

<x-slot name="title"> 

Administration - {{Auth::user()->name}}

</x-slot>
<x-slot name="pagedescription"> User Management </x-slot>



@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main menu-sidearea custom-main-box">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default bo-radius">
                <div class="panel-heading">
                    <div class="heading-bar">
                        <div class="greetings">
                            <h1 class="greet">Manager</h1>
                            <small>Howdy {{Auth::user()->name}}! </small>
                        </div>
                        
                        <div>
                            
                            <div class="btn-div">
                                {{-- @if (Route::has('new-release'))
                                
                                <a href="{{route('new-release')}}" class="btn btn-default btn-circle create-new"><span></span> + Create Release</a>
                                
                                @endif  --}}
                                    
                                <a href="/profile" class="btn btn-rounded-img">
                                    <img src="{{ Auth::user()->profile_photo_url }}" class="btn-rounded-img img-responsive" alt="" style="object-fit: cover;">
                                </a>

                                <form action="{{ route('logout') }}" method="POST" style="vertical-align:middle; display:inline-block">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-circle create-new float-right"
                                    style="color:white;"
                                    >
                                        {{ __('Logout') }}
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                    
                  

                    <span class="pull-right clickable panel-toggle panel-button-tab-left hideme"><em class="fa fa-toggle-up"></em></span></div>
                    <div class="panel-body custom-body">
                         @livewire('usermanagement')                                   
                    </div>
                </div>
            </div>
    </div><!--/.row-->
  
</div><!--/.row-->

</x-backend-layout>