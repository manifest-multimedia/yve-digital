@extends('layouts.backend')


@section('page-title')

Dashboard - {{Auth::user()->name}}

@endsection

@section('sidebar')
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">

    <div>

        <div class="mt-5">
            <p class="innerpage-site-title">YVE</p>
        </div>

        {{-- Load Menu --}}
        @includeIf('components.menu')

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
                            <h1 class="greet">Welcome back, {{Auth::user()->name}} </h1>
                            <small>See how your music is performing!</small>
                        </div>

                        <div>

                            {{-- <form action="{{ route('logout') }}" method="POST" style="padding-bottom:40px">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-circle create-new float-right"
                                style="float:right;"
                                >
                                    {{ __('Logout') }}
                                </button>
                            </form> --}}

                            <div class="btn-div">
                                @if (Route::has('new-release'))
                                
                                <a href="{{route('new-release')}}" class="btn btn-default btn-circle create-new"><span></span> + Create Release</a>
                                
                                @endif 
              
                                {{-- <a href="#" class="btn btn-default btn-rounded"><span><img src="{{asset('images/hi1.png')}}"></span></a>
                                <a href="#" class="btn btn-default btn-rounded"><span><img src="{{asset('images/hi2.png')}}"></span></a>
                                <a href="#" class="btn btn-default btn-rounded"><span><img src="{{asset('images/hi3.png')}}"></span></a> --}}
                                
                                
                                    @if (Route::has('profile'))
                                    <a href="{{route('profile')}}" class="btn btn-default btn-rounded-img">
                                        <img src="{{ Auth::user()->profile_photo_url }}" alt=""  class="btn-rounded-img img-responsive" alt="" style="object-fit: cover;">
                                    </a>
                                    @endif 

                                    <form action="{{ route('logout') }}" method="POST" style="vertical-align:middle; display:inline-block">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-circle create-new"
                                        style="color:white"
                                        >
                                            {{ __('Logout') }}
                                        </button>
                                    </form>
                                   
                                

                            </div>
                        </div>
                    </div>
                    
                    <div class="round-tabs">
                            <ul class="nav nav-pills">
                                <li><a href=""><small>1HR</small></a></li>
                                <li><a href=""><small>1D</small></a></li>
                                <li class="active"><a href=""><small>1W</small></a></li>
                                <li><a href=""><small>1M</small></a></li>
                                <li><a href=""><small>1Y</small></a></li>
                            </ul>										
                    </div>

                    <span class="pull-right clickable panel-toggle panel-button-tab-left hideme"><em class="fa fa-toggle-up"></em></span></div>
                    <div class="panel-body custom-body">
                        <div class="panel panel-default">
                            <div class="panel-body tabs">
                                <ul class="nav nav-pills custom-pills">
                                    <li class="active"><a href="#pilltab1" data-toggle="tab" aria-expanded="true">ALL({{$totalStreams}})</a></li>
                                    <li class=""><a href="#pilltab2" data-toggle="tab" aria-expanded="false">SPOTIFY({{$spotifyStreams}})</a></li>
                                    <li class=""><a href="#pilltab3" data-toggle="tab" aria-expanded="true">APPLE({{$appleStreams}})</a></li>
                                    <li class=""><a href="#pilltab4" data-toggle="tab" aria-expanded="true">YOUTUBE({{$youtubeStreams}})</a></li>
                                    <li class=""><a href="#pilltab5" data-toggle="tab" aria-expanded="true">OTHERS({{$otherStreams}})</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="pilltab1">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4 class="slider-top-text">Here's how your music is performing on all our distribution channels! </h4>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            {{-- Featured Release --}}
                                            @livewire('featuredsong')
                                            {{-- End Featured Release --}}
                                            {{-- Best Performning Stores --}}
                                            <div class="col-md-5 shadow-box">
                                                <div>
                                                    <h2 style="margin-top: 0px;" class="bps-text">Best Performing Stores</h2>
                                                    <div class="stores-lists">
                                                        <div class="store">
                                                            <small>YouTube</small>
                                                            <p><b>{{storePerformance(Auth::user()->username, 'youtube')}}%</b></p>
                                                        </div>
                                                        <div class="bar">
                                                            <div class="progress">
                                                                <div data-percentage="{{storePerformance(Auth::user()->username, 'youtube')}}%" style="width: {{storePerformance(Auth::user()->username, 'youtube')}}%;" class="progress-bar progress-bar-red" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="stores-lists">
                                                        <div class="store">
                                                            <small>Spotify</small>
                                                            <p><b>{{storePerformance(Auth::user()->username, 'spotify')}}%</b></p>
                                                        </div>
                                                        <div class="bar">
                                                            <div class="progress">
                                                                <div data-percentage="{{storePerformance(Auth::user()->username, 'spotify')}}%" style="width: {{storePerformance(Auth::user()->username, 'spotify')}}%;" class="progress-bar progress-bar-success" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="stores-lists">
                                                        <div class="store">
                                                            <small>Apple</small>
                                                            <p><b>{{storePerformance(Auth::user()->username, 'applemusic')}}%</b></p>
                                                        </div>
                                                        <div class="bar">
                                                            <div class="progress">
                                                                <div data-percentage="{{storePerformance(Auth::user()->username, 'applemusic')}}%" style="width: {{storePerformance(Auth::user()->username, 'applemusic')}}%;" class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="stores-lists">
                                                        <div class="store">
                                                            <small>Vimeo</small>
                                                            <p><b>{{storePerformance(Auth::user()->username, 'vimeo')}}%</b></p>
                                                        </div>
                                                        <div class="bar">
                                                            <div class="progress">
                                                                <div data-percentage="{{storePerformance(Auth::user()->username, 'vimeo')}}%" style="width: {{storePerformance(Auth::user()->username, 'vimeo')}}%;" class="progress-bar progress-bar-warning" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="stores-lists">
                                                        <div class="store">
                                                            <small>Deezer</small>
                                                            <p><b>{{storePerformance(Auth::user()->username, 'deezer')}}%</b></p>
                                                        </div>
                                                        <div class="bar">
                                                            <div class="progress">
                                                                <div data-percentage="{{storePerformance(Auth::user()->username, 'deezer')}}%" style="width: {{storePerformance(Auth::user()->username, 'deezer')}}%;" class="progress-bar progress-bar-info" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        {{-- End Best Performing Stores --}}
                                        <br>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="shadow-box">
                                                    <h2 style="margin-top: 0px;" class="bps-text">Best Performing Countries</h2>
                                                    <div class="row custom-flex-center">
                                                        <div class="col-md-6 col-ls-6 col-sm-6 col-xs-6">
                                                            <div class="country-tab">
                                                                <div class="country-tabs">
                                                                    <div>
                                                                        <img src="{{asset('images/flag1.png')}}" class="img-responsive">
                                                                        <span class="country-name">GHA</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="green-drop"><i class="glyphicon glyphicon-triangle-top "></i> 0%</span>	
                                                                    </div>
                                                                </div>
                                                                <div class="country-tabs">
                                                                    <div>
                                                                        <img src="{{asset('images/flag2.png')}}" class="img-responsive">
                                                                        <span class="country-name">GBR</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="green-drop"><i class="glyphicon glyphicon-triangle-top "></i> 0%</span>	
                                                                    </div>
                                                                </div>
                                                                <div class="country-tabs">
                                                                    <div>
                                                                        <img src="{{asset('images/flag3.png')}}" class="img-responsive">
                                                                        <span class="country-name">USA</span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="red-drop"><i class="glyphicon glyphicon-triangle-bottom "></i> 0%</span>	
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>

                                                                <a href="
                                                                @if (Route::has('analytics'))
                                                                {{route('analytics')}}
                                                                @endif 
                                                                ">See all Countries</a>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-ls-6 col-sm-6 col-xs-6">
                                                            <div class="earth">
                                                                <img src="../images/earth.png" class="img-responsive">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 shadow-box yellow-box">
                                                <div class="yellow-box-inner">
                                                    <div class="yellow-box-product">
                                                        <img src="../images/pr1.png" alt="" class="img-responsive">
                                                    </div>
                                                    <div class="yellow-box-btn-box">
                                                        <a href="{{route('new-release')}}" class="btn btn-circle btn-yellow-box">Create Release +</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                    
                                    {{-- Spotify --}}
                                        <div class="tab-pane fade" id="pilltab2">

                                            {!! $chart1->renderHtml() !!}
                                            {{-- Chart --}}
                                            {{-- <div class="row mt-5">
                                                <div class="col-md-12 chart-box">
                                                    <div>

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading_">
                                                            <span class="hideme pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
                                                            <div class="panel-body">
                                                                <div class="canvas-wrapper">
                                                                    <canvas class="main-chart" id="line-chart_2" height="132" width="397" style="width: 397px; height: 132px;"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                           
                                            {{-- End Chart --}}

                                            {{-- Total Streams --}}
                                            <div class="row" style="padding-bottom:50px">
                                                <div class="col-md-10 col-md-offset-1">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="shadow-box strm">
                                                                <div class="stream-boxes">
                                                                    <div class="stream-icon">
                                                                        <img src="../images/Group13.png" alt="">
                                                                    </div>
                                                                    <div class="stream-txt">
                                                                        <h3>{{$spotifyStreams}}</h3>
                                                                        <small>Total Streams</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- Total Downloads --}}
                                                        <div class="col-md-4">
                                                            <div class="shadow-box strm">
                                                                <div class="stream-boxes">
                                                                    <div class="stream-icon">
                                                                        <img src="../images/Group14.png" alt="">
                                                                    </div>
                                                                    <div class="stream-txt">
                                                                        <h3>{{storePerformance(Auth::user()->username, 'spotify')}}</h3>
                                                                        <small>Total Downloads</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="shadow-box strm">
                                                                <div class="stream-boxes">
                                                                    <div class="stream-icon">
                                                                        <img src="../images/Group15.png" alt="">
                                                                    </div>
                                                                    <div class="stream-txt">
                                                                        <h3>$ <span class="green-drop"></span></h3>
                                                                        <small>Total Songs</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                          
                                            
                                            
                                            @livewire('topdownloaded')

                                        </div>
                                    {{-- End Spotify --}}
                                    {{-- Apple --}}
                                    <div class="tab-pane fade  in" id="pilltab3">
                                        {{-- Total Streams --}}
                                        <div class="row">
                                            <div class="col-md-10 col-md-offset-1">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="shadow-box strm">
                                                            <div class="stream-boxes">
                                                                <div class="stream-icon">
                                                                    <img src="../images/Group13.png" alt="">
                                                                </div>
                                                                <div class="stream-txt">
                                                                    <h3>{{$appleStreams}}</h3>
                                                                    <small>TOTAL STREAMS</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- Total Downloads --}}
                                                    <div class="col-md-4">
                                                        <div class="shadow-box strm">
                                                            <div class="stream-boxes">
                                                                <div class="stream-icon">
                                                                    <img src="../images/Group14.png" alt="">
                                                                </div>
                                                                <div class="stream-txt">
                                                                    <h3>{{storePerformance(Auth::user()->username, 'spotify')}}</h3>
                                                                    <small>Total Downloads</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>

                                                    {{-- <div class="col-md-4">
                                                        <div class="shadow-box strm">
                                                            <div class="stream-boxes">
                                                                <div class="stream-icon">
                                                                    <img src="../images/Group15.png" alt="">
                                                                </div>
                                                                <div class="stream-txt">
                                                                    <h3>$ <span class="green-drop"></span></h3>
                                                                    <small>Total Revenue</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    {{-- End Apple --}}

                                    {{-- YouTube --}}
                                    <div class="tab-pane fade  in" id="pilltab4">
                                        
                                        <div class="row">
                                            <div class="col-md-10 col-md-offset-1">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="shadow-box strm">
                                                            <div class="stream-boxes">
                                                                <div class="stream-icon">
                                                                    <img src="../images/Group13.png" alt="">
                                                                </div>
                                                                <div class="stream-txt">
                                                                    <h3>{{$youtubeStreams}}</h3>
                                                                    <small>TOTAL STREAMS</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- Total Downloads --}}
                                                    <div class="col-md-4">
                                                        <div class="shadow-box strm">
                                                            <div class="stream-boxes">
                                                                <div class="stream-icon">
                                                                    <img src="../images/Group14.png" alt="">
                                                                </div>
                                                                <div class="stream-txt">
                                                                    <h3>{{storePerformance(Auth::user()->username, 'youtube')}}</h3>
                                                                    <small>Total Downloads</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>

                                                    {{-- <div class="col-md-4">
                                                        <div class="shadow-box strm">
                                                            <div class="stream-boxes">
                                                                <div class="stream-icon">
                                                                    <img src="../images/Group15.png" alt="">
                                                                </div>
                                                                <div class="stream-txt">
                                                                    <h3>$ <span class="green-drop"></span></h3>
                                                                    <small>Total Revenue</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    {{-- End YouTube --}}
                                    {{-- Others --}}
                                    <div class="tab-pane fade" id="pilltab5">
                                     
                                        <div class="row">
                                            <div class="col-md-10 col-md-offset-1">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="shadow-box strm">
                                                            <div class="stream-boxes">
                                                                <div class="stream-icon">
                                                                    <img src="../images/Group13.png" alt="">
                                                                </div>
                                                                <div class="stream-txt">
                                                                    <h3>{{$otherStreams}}</h3>
                                                                    <small>TOTAL STREAMS</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- Total Downloads --}}
                                                    <div class="col-md-4">
                                                        <div class="shadow-box strm">
                                                            <div class="stream-boxes">
                                                                <div class="stream-icon">
                                                                    <img src="../images/Group14.png" alt="">
                                                                </div>
                                                                <div class="stream-txt">
                                                                    <h3>{{storePerformance(Auth::user()->username, 'other')}}</h3>
                                                                    <small>Total Downloads</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>

                                                    {{-- <div class="col-md-4">
                                                        <div class="shadow-box strm">
                                                            <div class="stream-boxes">
                                                                <div class="stream-icon">
                                                                    <img src="../images/Group15.png" alt="">
                                                                </div>
                                                                <div class="stream-txt">
                                                                    <h3>$ <span class="green-drop"></span></h3>
                                                                    <small>Total Revenue</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    {{-- End Others --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
    
    
    
    
        </div><!--/.row-->

        {!! $chart1->renderChartJsLibrary() !!}
        {!! $chart1->renderJs() !!}

@endsection