@switch(Auth::user()->user_role)
    
    @case('admin')

        <ul class="nav menu">

            {{-- <li class="nav-item {{ request()->is('blog') ? 'active' : ''}}">
                <a class="nav-link " href="{{ url('blog') }}">{{ __('sentence.Blog') }}</a>
            </li> --}}

            <li class="{{ request()->is('admin')? 'active' : ''}}"><a href="/dashboard">MUSIC</a></li>
            <li class="{{ request()->is('new-release')? 'active' : ''}}"><a href="/new-release">RELEASES</a></li>
            <li class="{{ request()->is('upload-songs')? 'active' : ''}}"><a href="/upload-songs">UPLOADS</a></li>
            <li class="{{ request()->is('royalties')? 'active' : ''}}"><a href="/royalties">ROYALTIES</a></li>
            <li class="{{ request()->is('manage')? 'active' : ''}}"><a href="/manage">MANAGE</a></li>
            <li class="{{ request()->is('users')? 'active' : ''}}"> <a href="/users">USERS</a></li>
        </ul>
    
        @break

    @case('user')
    
    <ul class="nav menu">
        <li class="active"><a href="/dashboard">MUSIC</a></li>
        <li><a href="/royalties">ROYALTIES</a></li>
        
    </ul>

        @break

    @default
        <ul class="nav menu">
            <li class="{{ request()->is('dashboard')? 'active' : ''}}"><a href="/dashboard">MUSIC</a></li>
        </ul>
@endswitch
