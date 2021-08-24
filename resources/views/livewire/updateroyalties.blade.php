<div>

        <form action=""> 
            @csrf
        
            <div class="row"> 
                
            <div class="col-md-12" style='padding:0px 0px 20px 16px; margin-top:-20px'> 
                <span  class="greetings"> 
                    <small> You are logged in as an Administrator. </small>
                    </span>
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
                
                <label for="Entry-Date"> Entry Date </label> 
                <input type="datetime-local" class="form-control"/> 
                
            </div>

            <div class="col-md-6" style="padding-top:20px"> 
                
                <label for="Entry-Date"> Entry By </label> 
                <select disabled class="form-control" style="height:46px"> <option value="{{Auth::user()->name}}">{{Auth::user()->name}} </option> </select> 
                    
            </div>

            <div class="col-md-6" style="padding-top:20px">
            
                <label for="Entries"> Select Distribution Platform </label> 
                
                {{-- Select Music Distribution Platform --}}
                <select class="form-control" style="height:46px" wire:model="selectedPlatform">
                
                    <option value=""> Select Music Distribution Platform </option>
                    @if(!is_null($platforms))
                        
                            @foreach ($platforms as $platform)
                                <option value="{{$platform->name}}">{{$platform->name}}</option>                        
                            @endforeach
                    
                            
                    @endif
                </select>

                {{-- Selected: {{$selectedPlatform}} --}}
                
            </div> 

            @if(!is_null($selectedPlatform) && !empty($selectedPlatform))
                
            <div class="col-md-6"> 
                <label  style="padding-top:20px"> Downloads </label>
                
                <input class="form-control" type="number" placeholder="Enter {{$selectedPlatform}} Downloads" name="{{$selectedPlatform.'_downloads'}}" />

                <label style="padding-top:20px"> Streams </label>
                
                <input class="form-control" type="number" placeholder="Enter {{$selectedPlatform}} Streams" name="{{$selectedPlatform.'_streams'}}" />

                <label style="padding-top:20px"> Earnings </label>
                
                <input class="form-control" type="number" placeholder="Enter {{$selectedPlatform}} Earnings" name="{{$selectedPlatform.'_earnings'}}" />

                <button class="btn btn-primary" style="margin-top:20px; padding:10px 30px 10px 30px;"> Add Record </button>

            </div>

            @endif

        </form> 
 
</div>

