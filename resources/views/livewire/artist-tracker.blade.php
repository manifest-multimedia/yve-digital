<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="col-md-12">
        <h2 class="text-center pt-3 mb-2">Account Recovery!</h2>
        <div class="row">
            <div class="col-md-2"> </div>
            <div class="col-md-8"> @if($response!='error') <p> Dear {{getFirstName($selected_user)}}, Our Platform received a major update which requires you
                to update your account credentials to regain access to your account. Please complete your account update process below!
             </p>
             @else
             <p> Dear {{getFirstName($selected_user)}}, we had a challenge retrieving your account information. Please contact support@yvedigital.com for assistance. Thank you.</p> 
             @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <x-alert-error />
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row mb-10" x-data={step:1}>        
            <div x-show="step===1">
                    <div class="col-md-12">
                        <h5 class="text-center"> You must accept our service agreement to proceed to using our services.</h5>
                    </div> 
                    <div class="text-center mb-2"> 
                        <div class="row">
                            
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <h2 class="text-center mt-2 mb-4"> Accept Terms </h2>
                                <embed src="{{ asset('terms/agreement.pdf#zoom=100') }}" width="100%" height="320" alt="pdf" />
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                <div class="row mb-10">
                    <div class="col-md-12">
                        <h5 class="text-center"> You must accept our service agreement to proceed to using our services.</h5>
        
                        <div class="form-group text-center">
                            <input type="checkbox" name="accept_terms" id="accept_terms" wire:model='terms'>
                            <label for="accept_terms">Accept Terms</label>
                           
                        </div>
                        <div class="form-group text-center mt-2">
                            @if ($terms!=0)
                            <button @click="step=2" class="btn btn-primary mb-5">Proceed</button>
                        @endif
                        </div>
                    </div>   
                </div>
            </div>

            <div x-show="step===2">

              <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        
                            <div class="form-group m-2">

                                <div class="row">
                                    <div class="col-md-3">

                                        <label for="name" class="control-label col-md-4">Name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" id="" placeholder="Full Name" wire:model="name">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group m-2">
                                <div class="row">
                                    <div class="col-md-3">

                                        <label for="name">Email</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="email" name="email" id="" class="form-control" placeholder="Email" wire:model="email">

                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group m-2">
                                <div class="row">
                                    <div class="col-md-3">

                                        <label for="name">Facebook</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="facebook" id="" class="form-control" placeholder="Facebook Profile" wire:model="facebook">

                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-2">
                                <div class="row">
                                    <div class="col-md-3">

                                        <label for="name">Twitter</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="twitter" id="" class="form-control" placeholder="Twitter Profile" wire:model="twitter">

                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-2">
                                <div class="row">
                                    <div class="col-md-3">

                                        <label for="name">Instagram</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="instagram" id="" class="form-control" placeholder="Instagram Profile" wire:model="instagram">

                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-2">
                                <div class="row">

                                    <div class="col-md-3">
    
                                        <label for="name">Password</label>
                                    </div>
                                    <div class="col-md-9">
    
                                        <input type="password" name="password" id="" class="form-control" placeholder="Password" wire:model="password">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-2">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="name">Confirm Password</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="password" name="password_confirmation" id="" class="form-control" placeholder="Password Confirmation" wire:model='passwordconfirmation'>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-2">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9"><button type="submit" class="btn btn-primary" wire:click="save">Update</button></div>
                                </div>
                            </div>
                        
                    </div>
                    <div class="col-md-2"></div>
              </div>

            </div>
    </div>
