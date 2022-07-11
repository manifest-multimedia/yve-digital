<div>
    {{-- Be like water. wire:submit.prevent="insertRecord"--}}

    <div class="col-md-12"> 
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Sorry!</strong> could not save song data.<br><br>
                <ul style="list-style-type:none;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="" wire:submit.prevent="uploadSong">
            
            @csrf
            
            <div class="col-md-12">
                
                <div class="col-md-6" style="padding-top:20px">
                    
                    <label for="select-artist">Choose Artist</label>

                    <select name="artist" id="artist" class="form-control" style="height:46px" wire:model="selectedArtist">
                        <option value=""> Select Artist </option>
                        @foreach ($artists as $item)

                        <option value="{{$item->name}}">{{$item->name}}</option>
                            
                        @endforeach
                    </select>
                        
                </div>

                <div>   @if (!is_null($selectedArtist))

                            <div class="col-md-6" style="padding-top:20px">
                                
                            <label for="select-release">Select Release</label>
                            <select name="release" id="release" class="form-control" style="height:46px" wire:model="release_name">
                                
                                <option value="">Select A Release</option>
                            
                                @foreach ($releases as $item); 
                                    <option value="{{$item->release_name}}">{{$item->release_name}}</option>
                                @endforeach

                            </select>
                                
                            </div>
                
                            <div class="col-md-6" style="padding-top:20px">
                                <label for="number-of-songs">No. of Songs</label>
                                <input type="text" name="number_of_songs" value="{{$number_of_songs}}" class="form-control" />
                            </div>

                            <div class="col-md-6" style="padding-top:20px">
                                
                            </div>
                        @endif 
                </div> 

                <div class="release col-md-6" style="padding-top:20px">
                    <label> Genre * </label>
                    <input class="form-control" type="text" placeholder="Genre" wire:model="genre"/> 
                </div>
                
                <div class="col-md-6" style="padding-top:20px">
                    <label for="song-title">Song</label>
                    <input type="text" name='song' placeholder="Enter the Name of the Song here" class="form-control"
                    wire:model="song" />    
                </div>

                <div class="col-md-6" style="padding-top:20px">
                    <label for="upload">Upload Song</label>
                    <input type="file" name="upload" class="form-control" 
                    wire:model="upload" />    
                </div>

                <div class="col-md-6" style="padding-top:20px"></div>
                
                <div class="col-md-6" style="padding-top:20px">
                    <button class="btn btn-primary"> Add Song to Release </button>
                </div>

            </div>
        </form>
    </div>

</div>
