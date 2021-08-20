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
            {{-- <li><a href="/promotion">PROMOTION</a></li> --}}
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
                            <h1 class="greet">Profile Information!</h1>
                            <small>Take Control of Your Account! </small>
                        </div>
                        <div>

                            <div class="btn-div">
                             
                                    
                                <a href="#" class="btn btn-rounded-img">
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
                        
                    </div>



                    <div class="content-body"> 
                        <div class="container-fluid"> 
                             
                            <!-- Row --> 
                    
                            <div class="row">
                                
                    
                    
                                <div class="col-xl-8">
                                   
                                
                            
                                <div>
                                    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                                        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                                            @livewire('profile.update-profile-information-form')
                            
                                          
                                        @endif
                            
                                        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()) && ! is_null($user->password))
                                            <div class="mt-10 sm:mt-0">
                                                @livewire('profile.update-password-form')
                                            </div>
                            
                                            
                                        @else
                                            <div class="mt-10 sm:mt-0">
                                                @livewire('profile.set-password-form')
                                            </div>
                            
                                            
                                        @endif
                            
                                        @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication() && ! is_null($user->password))
                                            <div class="mt-10 sm:mt-0">
                                                @livewire('profile.two-factor-authentication-form')
                                            </div>
                            
                                            
                                        @endif
                            
                                        @if (JoelButcher\Socialstream\Socialstream::show())
                                            <div class="mt-10 sm:mt-0">
                                                @livewire('profile.connected-accounts-form')
                                            </div>
                                        @endif
                            
                            
                                        @if ( ! is_null($user->password))
                                            
                            
                                            <div class="mt-10 sm:mt-0">
                                                @livewire('profile.logout-other-browser-sessions-form')
                                            </div>
                                        @endif
                            
                                        @if (! is_null($user->password))
                                           
                            
                                            <div class="mt-10 sm:mt-0">
                                                @livewire('profile.delete-user-form')
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                                   
                          
                                          
                                        
                                    </div>
                                </div>
                    
                    
                    
                            </div>
                                
                    </div>
                    </div>


                </div>




                
            </div>




            





    </div><!--/.row-->

   


    
    
    
    
  
    
    
    
</div><!--/.row-->

@endsection



