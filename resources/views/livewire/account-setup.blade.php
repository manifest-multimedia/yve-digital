<div>
    {{-- Success is as dangerous as failure. --}}
    
    <div class="row">
        <div class="col-md-2"></div>

        <div class="col-md-12">
            <div class="card m-5 p-3">
                <h2 class="text-center m-2 mb-3"> Accept Terms </h2>
                <div class="row">
                    <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <embed src="{{ asset('terms/agreement.pdf') }}" width="100%" height="500" alt="pdf" />
                        </div>  
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>

        <div class="col-md-2"></div>
    </div>

    <div class="row mb-10">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h5 class="text-center"> You must accept our service agreement to proceed to using our services.</h5>
            <div class="form-group text-center">
                <input type="checkbox" value="1" name="accept_terms" id="accept_terms" wire:model="terms">
                <label for="accept_terms"><span style="font-size:20px; color:red">Accept Terms</span></label>
            </div> 
        </div>
        <div class="col-md-2"></div>
    </div>

    @if($terms==1)
        <div class="col-md-12">
            <div class="row">

                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h2 class="text-center mt-3 mb-2">Add Social Profiles</h2>

                    <form action="">
                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input type="text" id="facebook" placeholder="Facebook Handle" class="form-control" wire:model="facebook">
                        </div>
                        <div class="form-group">
                            <label for="facebook">Twitter</label>
                            <input type="text"  id="twitter" placeholder="Twitter Handle" class="form-control" wire:model="twitter">
                        </div>
                        <div class="form-group">
                            <label for="facebook">Instagram</label>
                            <input type="text" id="instagram" placeholder="Instagram Handle" class="form-control" wire:model="instagram">
                        </div>
                        <div class="text-center mt-3 mb-2"> 
                            <a class="btn btn-primary" wire:click="save">Complete Setup</a></div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    @endif
</div>
