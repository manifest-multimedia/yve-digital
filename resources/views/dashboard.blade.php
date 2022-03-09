<x-backend-layout>
    
    <x-slot name="title"> YVE Digital Music Distribution Platform </x-slot>


    <x-slot name="pagedescription">
    Account Balance     
    </x-slot>
    <div class="row">
                            
        <x-card-widget icon="library_music" color="primary" title="Releases" value="{{$releases}}" description="Total Releases" type="" percentage="4" /> 
        <x-card-widget icon="music_note" color="warning" title="Songs" value="{{$songs}}" description="Total Users" type="" percentage="4" /> 
        <x-card-widget icon="download" color="success" title="Downloads" value="{{$downloads}}" description="Total Downloads" type="" percentage="" /> 
     
         
     </div>


</x-backend-layout>