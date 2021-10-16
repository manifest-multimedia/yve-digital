<div>
    {{-- The best athlete wants his opponent at his best. --}}

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif


    @if (count($errors) > 0)
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Action Failed!</strong> There were some errors with your request <br><br>
                <ul style="list-style-type:none;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

{{-- 
    @if($errors->any())
    {{ implode('', $errors->all('<div class="alert alert-danger">:message</div>')) }}
@endif --}}

    <h2><strong>Users</strong>  </h2> 

    <input type="Text" placeholder="Enter Search Terms" class="form-control" wire:model="searchTerm"/>

<table class="table dataTable no-footer" style="margin-top:20px">
    


    <tr><td>Username</td> <td>Email</td> <td>Account Status</td> <td style="width:25% !important">Action</td> </tr>
   
    @if (empty($results))
    Nothing Found
@endif
    
    @foreach ($results as $item)
    
        <tr> <td> {{$item->username}} </td> <td> {{$item->email}} </td> <td> {{$item->account_status}}</td> 
            <td>
                <a href="{{ route('users.edit', $item->id) }}" class="btn btn-primary" style="display:inline-block !important;  float:left !important; vertical-align:top !important; margin:0px 5px 0px 0px"> Edit </a>
                
                <form action="{{ route('users.update', $item->id) }}" method="POST"> 
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="role" id="" value="{{$item->user_role}}">
                    <input type="hidden" name="status" id="" value="{{$item->account_status}}">

                <button type="submit" class="btn btn-primary" style="display:inline-block !important; float:left !important; vertical-align:top !important; margin:0px 5px 0px 0px"> Activate </button>
                
                </form> 

                <form action="{{ route('users.destroy', $item->id) }}" method="post"> 
                    @csrf
                    @method('DELETE')
                    

                   <button type="submit" class="btn btn-danger" style="display:inline-block !important ; float:left !important; vertical-align:top !important"> Delete </button> 

                </form>

            </td>
         </tr>
    @endforeach
   
    
</table>
{{ $results->links() }}

    
</div>
