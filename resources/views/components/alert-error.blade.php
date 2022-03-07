    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
@if ($errors->any())
    <div {{ $attributes }}> 
        @foreach ($errors->all() as $error)
            <x-alert type="danger" message={{$error}} />
        @endforeach
    </div>
@endif
