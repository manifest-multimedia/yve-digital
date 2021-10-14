<div>
    {{-- The best athlete wants his opponent at his best. --}}

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <h2><strong>Users</strong>  </h2> 

    <input type="Text" placeholder="Enter Search Terms" class="form-control" wire:model="searchTerm"/>

<table class="table dataTable no-footer">
    


    <tr><td>Username</td> <td>Email</td> <td>Account Status</td> <td>Action</td> </tr>
    @if (is_null($results))
        Nothing Found
    @endif
        
    
    @foreach ($results as $item)
        <tr> <td> {{$item->username}} </td> <td> {{$item->email}} </td> <td> {{$item->account_status}}</td> 
            <td>
                {{-- <a href="{{ route('users.edit', $item->id) }}" class="btn btn-primary"> Edit </a> --}}
                
                <form action="{{ route('users.update', $item->id) }}" method="POST"> 
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="role" id="" value="{{$item->user_role}}">
                    <input type="hidden" name="status" id="" value="{{$item->account_status}}">

                <button type="submit" class="btn btn-primary"> Activate </button>
                
                </form> 

                {{-- <form action="{{ route('users.destroy', $item->id) }}" method="post"> 
                    @csrf
                    @method('DELETE')
                    

                   <button type="submit" class="btn btn-danger"> Delete </button> 

                </form> --}}

            </td>
         </tr>
    @endforeach

</table>
        
    
</div>
