<x-auth-layout> 

<x-slot name="title"> Account Update </x-slot>
    
<div class="col-md-12 mb-10"> 
    
   
    <div class="row">
<div class="col-md-2">

</div>
<div class="col-md-8">
    <h2 class="text-center mt-3 mb-2"> System Updated! </h2>
    <p> The YVEDigital Music Distribution Platform received a major update on ... which requires requires existing users
        to update their account credentials to regain access to their accounts.
     </p>
</div>
<div class="col-md-2"></div>
    </div>
<div class="row mb-10">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <h5 class="text-center"> You must accept our service agreement to proceed to using our services.</h5>
{{-- <div class="form-group text-center">
    <input type="checkbox" name="accept_terms" id="accept_terms">
    <label for="accept_terms">Accept Terms</label>
    <button class="btn btn-primary"> Proceed </button>
    </div> 
    </div>
    <div class="col-md-2"></div>--}}
</div> 

<div class="col-md-12">
    <div class="row">

        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h4 class="text-center mt-3 mb-2">Enter Artist Name</h4>
            
            @livewire('artist-tracker')            
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

</div>
</x-auth-layout>