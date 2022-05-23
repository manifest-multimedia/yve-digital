<x-backend-layout>

<x-slot name="title"> 

Dashboard - {{Auth::user()->name}}

</x-slot>

<x-slot name="pagedescription"> Verification Checkpoint </x-slot>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main menu-sidearea custom-main-box">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default bo-radius">
                <div class="panel-heading">
                    <div class="heading-bar">
                        <div class="greetings">
                            <h1 class="greet">Account Verification</h1>
                            <small>Verification Checkpoint! </small>
                        </div>
                        
                        <div>
                            
                            <div class="btn-div">
                                    
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
                        
                        Dear {{Auth::user()->name;}}, your account is currently under review for manual verification processes to be completed. You will not be able to access the features of the system until your account has been fully verified. 
                        Please ensure you have provided all details needed for verification or contact support@yvedigital.com for further help. 
                        Thank you for choosing YVE Digital. 


                    </div>
                </div>
            </div>
    </div><!--/.row-->
    
</div><!--/.row-->

</x-backend-layout>