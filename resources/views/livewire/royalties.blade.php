
<div class="col-md-6"> 
    <label> Select User</label> 
    <select class="form-control" wire:model="selectUser"> 
    <option value="" selected> Select User </option> 
     
    @foreach ($users as $user)

    <option value="{{$user->username}}"> {{$user->name}} </option> 
        
    @endforeach    
    </select> 

</div>

<div class="col-md-6"> 
        
    <label> Select Release </label> 
    <select class="form-control" wire:model="selectRelease">
       <option value=""> Select Release </option> 
      
       @if(count($releases) > 0)
       
            @foreach ($releases as $release)
           
                <option value="{{$release->song_name}}"> {{$release->song_name}}  </option>

            @endforeach
        @endif
    </select>
    
</div> 



   

 
