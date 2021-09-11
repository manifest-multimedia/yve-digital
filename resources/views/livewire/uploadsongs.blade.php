<div>
    {{-- Be like water. wire:submit.prevent="insertRecord"--}}

    <form action="" wire:submit.prevent="uploadSong">
        @csrf
        
        <div class="col-md-12">
            
            <label for="select-release">Select Release</label>
            <select name="release" id=""><option value="">Select A Release</option></select>

            <label for="number-of-songs">No. of Songs</label>
            <input type="text" name="number_of_songs" value={{$release->no_of_songs}}>

            <label for="song-title">Song</label>
            <input type="text" name='song' placeholder="Enter the Name of the Song here">
            
            <label for="upload">Upload Song</label>
            <input type="file" name="upload">

            <button> Add Song to Release </button>

        </div>
    </form>


</div>
