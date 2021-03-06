<div>
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
                <strong>Sorry!</strong> could not create release.<br><br>
                <ul style="list-style-type:none;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

</div>

<div class="card">
    <div class="card-body">
        <form  wire:submit.prevent="insertRecord"> 
            @csrf
        <div class="row">
        
                <div class="release col-md-6" style="padding-top:20px">
                    <div class="form-group">
                        <label> Name of Artist * </label>
                        <select class="form-select" style="height:46px" wire:model="selected_user"> 
                            <option> Select Artist </option> 
        
                            @foreach ($artist as $item)
                                <option value="{{$item->user_id}}">{{$item->name}}</option>
                            @endforeach
        
                        </select>
                    </div>
                    
                </div>
        
                <div class="release col-md-6" style="padding-top:20px">
                    <div class="form-group"> 
                        <label> Release Name *</label>
                        <input class="form-control" type="text" placeholder="Release Name" wire:model="release_name"/>         
                    </div>   
                </div>
        
                
        
                <div class="release col-md-6" style="padding-top:20px">
                    <div class="form-group">
                        <label> Record Label *</label>
                        <input class="form-control" type="text" placeholder="Record Label" wire:model="record_label"/> 
                    </div>   
                </div>
        
                <div class="release col-md-6" style="padding-top:20px">
                    <div class="form-group">
                        <label> No. of Songs *</label>
                        <input class="form-control" type="text" placeholder="No. Of Songs" wire:model="no_of_songs" /> 
                    </div>    
                </div>
        
                <div class="release col-md-6" style="padding-top:20px">
                    <div class="form-group">
                        <label> Territory *</label>
                        <select class="form-select" style="height:46px" wire:model="territory"> 
                            <option> -- SELECT -- </option>
                            <option> Worldwide </option>
                            <option> Ghana </option>
                            <option> South Africa </option>
                            <option> Kenya </option>
                            <option> Other? </option>
                        </select>
                    </div>
                </div>
        
                
                <div class="release col-md-6" style="padding-top:20px">
                    <div class="form-group">
                        <label> Release Date *</label>
                        <input class="form-control" type="date" placeholder="Release Date" wire:model="release_date" /> 
                    </div>    
                </div>
                
                <div class="release col-md-6" style="padding-top:20px">
                    <div class="form-group">
                        <label> Upload Cover Art (2000px x 2000px) *</label>
                        <input class="form-control" type="file" placeholder="cover_art" wire:model="cover_art" />     
                    </div>
                </div>
        
                <div class="release col-md-6" style="padding-top:50px">
        
                    <button type="submit" class="btn btn-primary">
                    Submit Release
                    </button>
                
                </div>
            
           
        
        
        </div>
        </form> 
    </div>
</div>

</div>
