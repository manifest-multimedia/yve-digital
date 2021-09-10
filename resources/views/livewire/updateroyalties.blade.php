<div>
{{-- 
        <form action=""> 
           
            @csrf --}}


            <div class="row"> 
                
            <div class="col-md-12" style='padding:0px 0px 20px 16px; margin-top:-20px'> 
                <span  class="greetings"> 
                    <small> You are logged in as an Administrator. </small>
                    </span>
            </div>

        {{-- Display Success/Error Messages --}}

        <div class="col-md-12" style='padding:30px 0px 20px 16px; margin-top:-20px'> 

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong>Sorry!</strong> There are errors with your request.<br><br>
                        <ul style="list-style-type:none;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

        </div> 

            <div class="col-md-6"> 
                
                <label> Select A User </label>
                
                <select wire:model="selectedUser" class="form-control" style="height:46px"> 
                    <option value=""> Select A User </option>
                        @foreach ($users as $user)
                            <option value="{{$user->username}}"> {{$user->name}} </option> 
                        @endforeach
                </select>
                
            </div> 

            <div class="col-md-6">

                <label> Select A Song </label>
            
                <select wire:model="selectedSong" class="form-control" style="height:46px"> 
                    
                        <option value=""> Select A Song </option>
                        {{-- <option value="demo"> Demo </option>  --}}

                        @if(!is_null($selectedUser))
                            @foreach ($releases as $release)
                                <option value="{{$release->song_name}}"> {{$release->song_name}} </option>
                            @endforeach
                        @endif
                        
                        @if($releases->count() == 0)
                            <option value=""> No song(s) found for the selected user</option>
                        @endif
                </select>

            </div> 
            
            <div class="col-md-6" style="padding-top:20px"> 
                
                <label for="Period-Start"> Period Start </label> 
                <input wire:model="periodStart" type="date" class="form-control"/> 
                
            </div>

            <div class="col-md-6" style="padding-top:20px"> 
                
                <label for="Period-End"> Period End </label> 
                <input wire:model="periodEnd" type="date" class="form-control"/> 
                
            </div>

            {{-- <div class="col-md-6" style="padding-top:20px"> 
                
                <label for="Entry-Date"> Period End </label> 
                <input wire:model="periodGained" type="datetime-local" class="form-control"/> 
                
            </div> --}}

            

            <div class="col-md-6" style="padding-top:20px">
            
                <label for="Entries"> Select Distribution Platform </label> 
                
                {{-- Select Music Distribution Platform --}}
                <select class="form-control" name="platform" style="height:46px" wire:model="selectedPlatform">
                
                    <option value=""> Select Music Distribution Platform </option>
                    @if(!is_null($platforms))
                        
                            @foreach ($platforms as $platform)
                                <option value="{{$platform->platform}}">{{$platform->platform}}</option>                        
                            @endforeach
                            
                    @endif
                </select>
                
            </div> 

            <div class="col-md-6" style="padding-top:20px"> 
                
                <label for="Entry-By"> Entry By </label> 
                <select wire:model="enteredBy" disabled class="form-control" style="height:46px"> <option value="{{Auth::user()->name}}">{{Auth::user()->name}} </option> </select> 
                    
            </div>

            @if(!is_null($selectedPlatform) && !empty($selectedPlatform))
                
            <div class="col-md-6"> 
                <label  style="padding-top:20px"> Downloads </label>
                
                <input wire:model="downloads" class="form-control" type="number" placeholder="Enter {{$selectedPlatform}} Downloads" name="{{$selectedPlatform.'_downloads'}}" />

                <label style="padding-top:20px"> Streams </label>
                
                <input wire:model="streams" class="form-control" type="number" placeholder="Enter {{$selectedPlatform}} Streams" name="{{$selectedPlatform.'_streams'}}" />

                <label style="padding-top:20px"> Earnings </label>
                
                <input wire:model="earnings" class="form-control" type="number" placeholder="Enter {{$selectedPlatform}} Earnings" name="{{$selectedPlatform.'_earnings'}}" />

                <a class="btn btn-primary" style="margin-top:20px; padding:10px 30px 10px 30px;" wire:click="insertRecord()"> Add Record </a>


                

            </div>

            @endif

            

        {{-- </form>  --}}
 
</div>

