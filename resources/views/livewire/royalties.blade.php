
<div class="col-md-6"> 
    <label> Select User</label> 
    <select class="form-control" wire:model.lazy="selectedUser"> 
    <option value="" selected> Select User </option> 
     
    @foreach ($users as $user)

    <option value="{{$user->username}}"> {{$user->name}} </option> 
        
    @endforeach    
    </select> 

</div>

@if(!is_null($releases))

<div class="col-md-6"> 
    <label> Select Release</label> 
    <select class="form-control" wire:model="selectedRelease"> 
    <option value="" selected> Select Release </option> 
     
    @foreach ($releases as $release)

    <option value="{{$release->username}}"> {{$release->song_name}} </option> 
        
    @endforeach    
    </select> 

</div>

@endif 






 
