<x-backend-layout> 

    <x-slot name="title"> Account Setup </x-slot>
    <x-slot name="pagedescription"> Complete Account Setup</x-slot>


    <div class="col-md-12">
        <p class="text-center"> Hello {{getFirstName(Auth::user()->name)}}, thanks for creating your account. Here are a few steps to complete your account setup.</p>
       <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8"> <ul class="list-group text-center">
            <li class="list-group-item">Accept Agreement</li>
            <li class="list-group-item">Add Social Media Profiles</li>
            <li class="list-group-item">Await Manual Verification</li>
        </ul></div>
           <div class="col-md-2"></div>
       </div>
    </div>
<div class="col-md-12 mb-10"> 
    
   
    <div class="row">
<div class="col-md-2">

</div>
<div class="col-md-8">
    <h2 class="text-center mt-3 mb-2"> Accept Terms </h2>

    <embed src="{{ asset('terms/agreement.pdf') }}" width="100%" height="500" alt="pdf" />
</div>
<div class="col-md-2"></div>
    </div>
<div class="row mb-10">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <h5 class="text-center"> You must accept our service agreement to proceed to using our services.</h5>
<div class="form-group text-center">
    <input type="checkbox" name="accept_terms" id="accept_terms">
    <label for="accept_terms">Accept Terms</label>
    <button class="btn btn-primary"> Proceed </button>
    </div> 
    </div>
    <div class="col-md-2"></div>
</div>


<div class="col-md-12">
    <div class="row">

        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2 class="text-center mt-3 mb-2">Add Social Profiles</h2>

            <form action="">
                <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="text" name="facebook" id="facebook" placeholder="Facebook Handle" class="form-control">
                </div>
                <div class="form-group">
                    <label for="facebook">Twitter</label>
                    <input type="text" name="twitter" id="twitter" placeholder="Twitter Handle" class="form-control">
                </div>
                <div class="form-group">
                    <label for="facebook">Instagram</label>
                    <input type="text" name="instagram" id="instagram" placeholder="Instagram Handle" class="form-control">
                </div>
                <div class="text-center mt-3 mb-2"> <button class="btn btn-primary">Complete Setup</button></div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

</div>
</x-backend-layout>