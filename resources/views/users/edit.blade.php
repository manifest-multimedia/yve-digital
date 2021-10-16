@extends('layouts.backend')

@section('page-title')

User Management - {{Auth::user()->name}}

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
                            <h1 class="greet">Edit User Information</h1>
                            <small>You are editing record for {{$user->name}} </small>
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
                        
                        <form action="/users" method="post">
                            @csrf
                            @method('POST')
                            <div class="col-md-12">
                                
                                <div class="col-md-6" style="padding-top:20px">
                                    
                                   <label for="select-artist">Name</label>
                                    <input type="text" name="name" value="{{$user->name}}" class="form-control">
                                    <input type="hidden" name="id" value="{{$user->id}}">
                                    <input type="hidden" name="request_type" value="Update">
                                </div>
                    
                                <div>  
                    
                                    <div class="col-md-6" style="padding-top:20px">
                                        
                                    <label for="select-release">Username</label>
                                    <input type="text" name="username" value="{{$user->username}}" class="form-control">    
                                    </div>
                        
                                    <div class="col-md-6" style="padding-top:20px">
                                        <label for="number-of-songs">Email</label>
                                        <input type="text" name="email" value="{{$user->email}}" class="form-control" />
                                    </div>
                                </div> 

                                <div class="release col-md-6" style="padding-top:20px">
                                    <label> Account Status </label>
                                    <select name="account_status" id="" class="form-control" style="height:46px">
                                        @if($user->account_status=='verified'||$user->account_status=='old')

                                        <option value="verified" selected>Active</option>    
                                        <option value="unverified">Disabled</option>

                                        @else 
                                        <option value="verified">Active</option>    
                                        <option value="unverified">Disabled</option>
                                        @endif
                                    
                                    </select> 
                                </div>

                                <div class="release col-md-6" style="padding-top:20px">
                                    <label> User Role </label>
                                    <select name="user_role" id="" class="form-control" style="height:46px">
                                        @if($user->user_role=='admin')
                                            <option value="{{$user->user_role}}" selected> {{ucfirst($user->user_role) }} </option>
                                            <option value="user">User</option>    
                                        @else 
                                            <option value="{{$user->user_role}}" selected> {{ucfirst($user->user_role) }} </option> 
                                            <option value="admin">Admin</option>
                                        @endif 
                                    </select> 
                                </div>
                                
                                <div class="col-md-6" style="padding-top:20px">
                                    
                                   <label for="Password"> Reset Password </label>
                                   <input type="text" name="password" class="form-control" placeholder="Update Password">
                                    
                                </div>

                                <div class="col-md-6" style="padding-top:20px">
                                    
                                    <button class="btn btn-danger form-control" type="submit"> Update</button>
                                    
                                </div>
                                <div class="col-md-6" style="padding-top:20px">
                                    
                                    <a href="{{ URL::previous() }}" class="btn btn-primary form-control"> Cancel</a>
                                    
                                </div>
                    
                            </div>
                        </form>



@endsection