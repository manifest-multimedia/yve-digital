<x-backend-layout>
    
    <x-slot name="title"> YVE Digital Music Distribution Platform </x-slot>

    <x-slot name="pagedescription">
        Account Balance <span style="float:right">${{$totalStreams}}USD</span>
    </x-slot>
    
    <div class="row">
                            
        <x-card-widget icon="paid" color="primary" title="Songs" value="480" description="Total Music in Distribution" type="" percentage="4" /> 
        <x-card-widget icon="person" color="warning" title="Users" value="100" description="Total Users" type="" percentage="4" /> 
        <x-card-widget icon="help" color="danger" title="Tickets" value="1000" description="Tickets Total" type="" percentage="" /> 
 
     </div>

     <x-stats-widget-large title='Performance' report_title='Performance'
     
     report_items={{$report_items}}
    >
<x-slot name="title">Performance</x-slot>
<x-slot name="summary"> 

    Here is how your music is performing on all distribution channels. 
    

</x-slot>
<li class="list-group-item"> Youtube
    <span class="float-end text-success">{{$youtubeStreams}}<i class="material-icons align-middle">keyboard_arrow_up</i></span>
</li>   
<li class="list-group-item"> Spotify
    <span class="float-end text-success">{{$spotifyStreams}}<i class="material-icons align-middle">keyboard_arrow_up</i></span>
</li>   
<li class="list-group-item"> Apple
    <span class="float-end text-success">{{$appleStreams}}<i class="material-icons align-middle">keyboard_arrow_up</i></span>
</li>   
<li class="list-group-item"> Other
    <span class="float-end text-success">{{$otherStreams}}<i class="material-icons align-middle">keyboard_arrow_up</i></span>
</li>   
<li class="list-group-item"> Total Streams
    <span class="float-end text-success">{{$totalStreams}}<i class="material-icons align-middle">keyboard_arrow_up</i></span>
</li>   

    </x-stats-widget-large>

     @component("components.action-list-widget", ['data'=>$data])  @endcomponent 
     

</x-backend-layout>