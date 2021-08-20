@extends('layouts.backend')


@section('page-title')

Administration - {{Auth::user()->name}}

@endsection

@section('sidebar')
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">

    <div>
        <div class="mt-5">
            <p class="innerpage-site-title">YVE</p>
        </div>
        <ul class="nav menu">
            <li><a href="/dashboard">MUSIC</a></li>
            <li><a href="/analytics">ANALYTICS</a></li>
            <li><a href="/royalties">ROYALTIES</a></li>
            <li  class="active"><a href="/promotion">MANAGE</a></li>
        </ul>
    </div>

    <div class="line-divider">
        
    </div>

    <div class="side-bar-bottom-text">
        <h3>We are here to help</h3>
        <p>Ask a question or file a 
            suppoort ticket, manage 
            request, report on issues. 
            Our support team will get 
        back to you in no time</p>
    </div>

    <div class="btn-area">
        <a href="https://support.yvedigital.com" class="btn btn-circle btn-primary">Get Support Now</a>
    </div>

    <div>
        <div class="terms">

            <ul>
                <li><a href="/legal">Terms</a></li>
                <li><a href="/privacy">Privacy</a></li>
                <li><a href="https://support.yvedigital.com">Help</a></li>
            </ul>



            <div class="developer-mention mt-4">
                <small>Created by Manifest Multimedia</small>
            </div>
        </div>
    </div>

</div>
<!--/.sidebar-->
@endsection

@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main menu-sidearea custom-main-box">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default bo-radius">
                <div class="panel-heading">
                    <div class="heading-bar">
                        <div class="greetings">
                            <h1 class="greet">Manager</h1>
                            <small>Take it a notch higher! </small>
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
                    </div>
                    
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
                        

                        <form> 
                            @csrf
                           
                            <div class="row"> 
                                
                                

                                @livewire('royalties')

                                
                            
                        


                            <div class="col-md-6"> 
                            <fieldset> 
                            <h3> Spotify </h3> 
                            <label> Downloads</label>
                            <input class="form-control" type="text" /> 
                            <label> Streams</label>
                            <input class="form-control" type="text" /> 
                            <label> Earnings</label>
                            <input class="form-control" type="text" /> 
                            </fieldset>
                            </div> 

                            <div class="col-md-6"> 
                                <fieldset> 
                                <h3> Deezer </h3> 
                                <label> Downloads</label>
                                <input class="form-control" type="text" /> 
                                <label> Streams</label>
                                <input class="form-control" type="text" /> 
                                <label> Earnings</label>
                                <input class="form-control" type="text" /> 
                                </fieldset>
                                </div> 
                            

                                <div class="col-md-6"> 
                                    <fieldset> 
                                    <h3> YouTube </h3> 
                                    <label> Downloads</label>
                                    <input class="form-control" type="text" /> 
                                    <label> Streams</label>
                                    <input class="form-control" type="text" /> 
                                    <label> Earnings</label>
                                    <input class="form-control" type="text" /> 
                                    </fieldset>
                                    </div> 

                                    <div class="col-md-6"> 
                                        <fieldset> 
                                        <h3> Tidal </h3> 
                                        <label> Downloads</label>
                                        <input class="form-control" type="text" /> 
                                        <label> Streams</label>
                                        <input class="form-control" type="text" /> 
                                        <label> Earnings</label>
                                        <input class="form-control" type="text" /> 
                                        </fieldset>
                                        </div> 

                                        <div class="col-md-6"> 
                                            <fieldset> 
                                            <h3> Apple Music </h3> 
                                            <label> Downloads</label>
                                            <input class="form-control" type="text" /> 
                                            <label> Streams</label>
                                            <input class="form-control" type="text" /> 
                                            <label> Earnings</label>
                                            <input class="form-control" type="text" /> 
                                            </fieldset>
                                            </div> 

                                            <div class="col-md-6"> 
                                                <fieldset> 
                                                <h3> Vevo </h3> 
                                                <label> Downloads</label>
                                                <input class="form-control" type="text" /> 
                                                <label> Streams</label>
                                                <input class="form-control" type="text" /> 
                                                <label> Earnings</label>
                                                <input class="form-control" type="text" /> 
                                                </fieldset>
                                                </div> 

                                                <div class="col-md-6"> 
                                                    <fieldset> 
                                                    <h3> Amazon </h3> 
                                                    <label> Downloads</label>
                                                    <input class="form-control" type="text" /> 
                                                    <label> Streams</label>
                                                    <input class="form-control" type="text" /> 
                                                    <label> Earnings</label>
                                                    <input class="form-control" type="text" /> 
                                                    </fieldset>
                                                    </div> 

                        </div>
                        </form>


                    </div>
                </div>
            </div>
    </div><!--/.row-->

   

    
</div><!--/.row-->

@endsection