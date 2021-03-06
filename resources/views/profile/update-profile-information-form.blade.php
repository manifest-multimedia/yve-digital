<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        <strong> {{ __('Profile Photo') }}</strong> 
    </x-slot>

    <x-slot name="description">
        {{ __('Update your Profile Photo') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                {{-- <x-jet-label for="photo" value="{{ __('Photo') }}" /> --}}

                <!-- Current Profile Photo -->
                <div class="" x-show="! photoPreview" style="max-width:200px; max-height:200px;">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="img-circle" style="height:200px; width:200px; object-fit: cover; padding:10px">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview">
                    <span class="block rounded-full w-20 h-20 img-circle"
                          x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'" style="height:200px; width:200px; object-fit: cover; padding:10px">
                    </span>
                </div>

                <x-jet-secondary-button class="btn btn-primary" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="btn btn-danger" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" class="form-control" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="form-control" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>
       

    </x-slot>

   

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo" class="btn btn-primary" >
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
