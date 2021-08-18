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
        <ul class="nav menu">
            <li><a href="/dashboard">MUSIC</a></li>
            <li><a href="/analytics">ANALYTICS</a></li>
            <li class=""><a href="/royalties">ROYALTIES</a></li>
            <li><a href="/promotion">PROMOTION</a></li>
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
        <a href="#" class="btn btn-circle btn-primary">Get Support Now</a>
    </div>

    <div>
        <div class="terms">

            <ul>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Help</a></li>
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
                            <h1 class="greet">Create Release</h1>
                            <small>Take your music to the World! </small>
                        </div>

                        <div>
                            
                            <div class="btn-div">
                                @if (Route::has('profile'))
                                <a href="{{route('profile')}}" class="btn btn-default btn-rounded-img">
                                    <img src="{{ Auth::user()->profile_photo_url }}" class="img-responsive" alt="">
                                </a>
                                @endif 

                                <form action="{{ route('logout') }}" method="POST" style="vertical-align:middle; display:inline-block">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-circle create-new float-right"
                                    style="color:white;;"
                                    >
                                        {{ __('Logout') }}
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                    
                    

                    <span class="pull-right clickable panel-toggle panel-button-tab-left hideme"><em class="fa fa-toggle-up"></em></span></div>
                  
                    <div class="panel-body custom-body">
                        <form style="padding-top:20px" > 
                            @csrf

                            <div class="release col-md-6">

                                
                                    <label> Release Name *</label>
                                    <input class="form-control" type="text" placeholder="Release Name"/> 
            
                            
        
                            </div>

                            <div class="release col-md-6">

                                
                                    <label> Genre *</label>
                                    <input class="form-control" type="text" placeholder="Genre"/> 
            
        
                            </div>

                            <div class="release col-md-6" style="padding-top:20px">

                            
                                    <label> Name of Artist *</label>
                                    <input class="form-control" type="text" placeholder="Name of Artist"/> 
            
                            </div>

                            <div class="release col-md-6" style="padding-top:20px">

                            
                                <label> Record Label *</label>
                                <input class="form-control" type="text" placeholder="Record Label"/> 

                            </div>

                            <div class="release col-md-6" style="padding-top:20px">

                            
                                <label> No. of Songs *</label>
                                <input class="form-control" type="text" placeholder="Record Label"/> 

                            </div>

                            <div class="release col-md-6" style="padding-top:20px">

                            
                                <label> Territory *</label>

                                <select class="form-control" style="height:46px"> 
                                    <option> -- SELECT -- </option>
                                    <option> Worldwide </option>
                                    <option> Ghana </option>
                                    <option> South Africa </option>
                                    <option> Kenya </option>
                                    <option> Other? </option>

                                </select>

                            </div>

                            
                            <div class="release col-md-6" style="padding-top:20px">

                                <label> Release Date *</label>
                                <input class="form-control" type="date" placeholder="Release Date"/> 

                            </div>
                            
                            <div class="release col-md-6" style="padding-top:20px">

                                <label> Upload Cover Art (2000px x 2000px) *</label>
                                <input class="form-control" type="file" placeholder="Release Date"/> 

                            </div>
                            <div class="release col-md-6" style="padding-top:20px">

                                <button type="submit" class="btn btn-primary">
                                Submit Release
                                </button>
                            
                            </div>
                        
                        </form> 
                       
      
                    </div>
                        
                    </div>

                    
                    
                </div>
            </div>
    </div><!--/.row-->

   

    
</div><!--/.row-->
@endsection