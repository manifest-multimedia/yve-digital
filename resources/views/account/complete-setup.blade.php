<x-backend-layout> 

    <x-slot name="title"> Account Setup </x-slot>
    <x-slot name="pagedescription"> Complete Account Setup</x-slot>


    <div class="col-md-12">
        <p class="text-center"> Hello {{getFirstName(Auth::user()->name)}}, thanks for creating your account. Here are a few steps to complete your account setup.</p>
       <div class="row">
           
           <div class="col-md-12"> <ul class="list-group text-center">
            <div class="row">
                <div class="col-md-4">
                    <li class="list-group-item"><span class="btn btn-secondary"> Step 1 > </span> Accept Agreement</li>
                </div>
                <div class="col-md-4">
                    <li class="list-group-item"><span class="btn btn-secondary">Step 2 > </span> Add Social Media Profiles</li>
                </div>
                <div class="col-md-4">
                    <li class="list-group-item"><span class="btn btn-secondary">Step 3 > </span> Await Manual Verification</li>
                </div>
             </div>
        </ul></div>
       
       </div>
    </div>
<div class="col-md-12 mb-10"> 
    
   @livewire("account-setup")

</div>

</x-backend-layout>