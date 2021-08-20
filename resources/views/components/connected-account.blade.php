@props(['provider', 'createdAt' => null])

<div>
    <div class="row  pl-3 flex items-center justify-between" style="margin:auto; width:100%">
        <div class="col-md-8 flex items-center" style="display:inline-block">
            @switch($provider)
                @case(JoelButcher\Socialstream\Providers::facebook())
                    <x-facebook-icon class="h-6 w-6 mr-2 btn-rounded-img img" />
                    @break
                @case(JoelButcher\Socialstream\Providers::google())
                    <x-google-icon class="h-6 w-6 mr-2 btn-rounded-img img" />
                    @break
                @case(JoelButcher\Socialstream\Providers::twitter())
                    <x-twitter-icon class="h-6 w-6 mr-2 btn-rounded-img img" />
                    @break
                @case(JoelButcher\Socialstream\Providers::linkedin())
                    <x-linked-in-icon class="h-6 w-6 mr-2 btn-rounded-img img" />
                    @break
                @case(JoelButcher\Socialstream\Providers::github())
                    <x-github-icon class="h-6 w-6 mr-2 btn-rounded-img img" />
                    @break
                @case(JoelButcher\Socialstream\Providers::gitlab())
                    <x-gitlab-icon class="h-6 w-6 mr-2 btn-rounded-img img" />
                    @break
                @case(JoelButcher\Socialstream\Providers::bitbucket())
                    <x-bitbucket-icon class="h-6 w-6 mr-2 btn-rounded-img img" />
                    @break
                @default
            @endswitch

            <div>
                <div class="text-sm font-semibold text-gray-600">
                    {{ __(ucfirst($provider)) }}
                </div>

                @if (! empty($createdAt))
                    <div class="text-xs text-gray-500">
                        Connected {{ $createdAt }}
                    </div>
                @else
                    <div class="text-xs text-gray-500" style="color:red">
                        {{ __('Not connected.') }}
                    </div>
                @endif
            </div>
        </div>

        <div>
            {{ $action }}
        </div>
    </div>

    @error($provider.'_connect_error')
        <div class="text-sm font-semibold text-red-500 px-3 mt-2">
            {{ $message }}
        </div>
    @enderror
</div>
