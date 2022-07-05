<div>
    {{-- Be like water. --}}


    <div class="col-md-12">

<div id="SuccessMessage" 
x-data="{show : true}" 
x-init="setTimeout(()=> show = false, 4000)"
x-show="show">

    @if(Session::has('success'))
    <p class="alert alert-success">{{ Session::get('success') }}</p>
    @endif

</div>

        <div class="row">

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Username</label>
                        <select name="username" id="username" wire:model="selected_username" class="form-select">
                            <option value="">
                                Select a User
                            </option>
                            @foreach ($usernames as $item)
                                <option value="{{$item->username}}">{{$item->username}}</option>
                            @endforeach
                        </select>
                        @error('selected_username') <span style="color:red">{{$message}}</span> @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" placeholder="Enter User's Email" wire:model="email">
                        @error('email') <span style="color:red"> {{$message}} </span> @enderror 
                    </div>
                </div>
                <div class="col-md-4 mt-4 pt-1">
                    <div class="form-group">
                        <button class="btn btn-primary" wire:click="send">Send Recovery Email</button>
                    </div>
                </div>
            </div>
        </div>


</div>
