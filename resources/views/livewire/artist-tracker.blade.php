<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

        <div class="form-group">
            <label for="username">Artist Name</label>
            <input type="text" id="username" placeholder="Artist Name" class="form-control" wire:model='search'>

        </div>
     
        <div class="text-center mt-3 mb-2"> 

           Searching for {{$search}}, found 
            @if (!is_null($found))
                @foreach ($found as $item)
    
                @if ($found->count()>1)
                    {{$item->name}}, 
                    
                @else
                
                {{$item->name}}
                
                
                @endif
                    
                @endforeach 
                
            @endif


            <button class="btn btn-primary">Proceed</button>
        </div>
   
</div>
