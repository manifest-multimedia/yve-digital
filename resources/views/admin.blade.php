<x-backend-layout>
    
    <x-slot name="title"> YVE Digital Music Distribution Platform </x-slot>

    <x-slot name="pagedescription">
        Account Balance {{$totalStreams}}     
        </x-slot>
    
    <div class="row">
                            
        <x-card-widget icon="paid" color="primary" title="My Title" value="1000" description="Description" type="" percentage="4" /> 
        <x-card-widget icon="person" color="warning" title="My Title" value="1000" description="Description" type="" percentage="4" /> 
        <x-card-widget icon="help" color="danger" title="My Title" value="1000" description="Description" type="" percentage="" /> 
 
     </div>


     @component("components.action-list-widget", ['data'=>$data])
  
     @endcomponent 
     
</x-backend-layout>