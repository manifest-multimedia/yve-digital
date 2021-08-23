<div>
            <div class="col-md-6"> 
                
                <label> Select A User </label>
               
                <select wire:model="selectedUser" class="form-control"> 
                    <option value=""> Select A User </option>
                        @foreach ($users as $user)
                            <option value="{{$user->username}}"> {{$user->name}} </option> 
                        @endforeach
                </select>
                {{-- Selected: {{$selectedUser}} --}}
           </div> 

                <div class="col-md-6">

                    <label> Select A Release </label>
                
                    <select wire:model="selectedRelease" class="form-control"> 
                        
                            <option value=""> Select A Release </option>
                        
                            @if(!is_null($selectedUser))
                                @foreach ($releases as $release)
                                    <option value="{{$release->song_name}}"> {{$release->song_name}} </option>
                                @endforeach
                            @endif
                            
                            @if($releases->count() == 0)
                                <option> No songs found for the selected user ({{$selectedUser}})</option>
                            @endif
                    </select>

                    {{-- Selected: {{$selectedRelease}} --}}

                </div> 

            
</div>

