
<x-backend-layout>
    <x-slot name="title"> YVE Digital Music Distribution Platform - {{Auth::user()->name}}</x-slot>
    <x-slot name="pagedescription">
        Upload Songs
    </x-slot>
    
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default bo-radius">
                <div class="panel-heading">
                    {{-- <div class="heading-bar">
                        <div class="greetings">
                            <h1 class="greet">Upload Songs</h1>
                            <small>Details of how your music is performing! </small>
                        </div>

                        <div>
                            
                            <div class="btn-div">
                                @if (Route::has('new-release'))
                                
                                <a href="{{route('new-release')}}" class="btn btn-default btn-circle create-new"><span></span> + Create Release</a>
                                
                                @endif 
                                    
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
                    </div> --}}
                    
                    {{-- <div class="round-tabs">
                            <ul class="nav nav-pills">
                                <li><a href=""><small>1HR</small></a></li>
                                <li><a href=""><small>1D</small></a></li>
                                <li class="active"><a href=""><small>1W</small></a></li>
                                <li><a href=""><small>1M</small></a></li>
                                <li><a href=""><small>1Y</small></a></li>
                            </ul>										
                    </div> --}}

                    <span class="pull-right clickable panel-toggle panel-button-tab-left hideme"><em class="fa fa-toggle-up"></em></span></div>
                    <div class="panel-body custom-body">
                        

                        @livewire('uploadsongs')



                    </div>
                </div>
            </div>
    </div><!--/.row-->

   

    
   


</x-backend-layout>