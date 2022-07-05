<div class="app-menu">
    <ul class="accordion-menu">
        <li class="sidebar-title">
           NAVIGATION
        </li>
        {{-- <li class="active-page">
            <a href="/" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
        </li> --}}

        @switch(Auth::user()->user_role)
    
    @case('admin')
            
            <li class="{{ request()->is('admin')? 'active-page' : ''}}">
                <a href="{{url('dashboard')}}"> 
                    <i class="material-icons-two-tone">dashboard</i>
                    Overview
                </a>
            </li>
            
            <li class="{{ request()->is('manage')? 'active-page' : ''}}">
                <a href="{{url('manage')}}"> 
                    <i class="material-icons-two-tone"> dashboard_customize </i>
                    Admin Area
                </a>
            </li>
          
            <li class="{{ request()->is('recover')? 'active-page' : ''}}">
                <a href="{{url('recover')}}"> 
                    <i class="material-icons-two-tone"> restore_page </i>
                    Account Recovery
                </a>
            </li>

            <li class="{{ request()->is('new-release')? 'active-page' : ''}}">
                <a href="/new-release">
                    <i class="material-icons-two-tone"> library_music </i>
                    Releases
                </a>
            </li>

            <li class="{{ request()->is('upload-songs')? 'active-page' : ''}}">
                <a href="/upload-songs">
                    <i class="material-icons-two-tone"> library_add </i>
                    Uploads</a>
            </li>
            <li class="{{ request()->is('royalties')? 'active-page' : ''}}">
                <a href="/royalties">
                    <i class="material-icons-two-tone"> paid </i>
                    Royalties</a>
            </li>
            <li class="{{ request()->is('users')? 'active-page' : ''}}"> 
                <a href="/users">
                    <i class="material-icons-two-tone"> people </i>
                    Users</a>
            </li>
            <x-logout-link />
    
        @break

    @case('user')
    
    
        <li class="{{ request()->is('user')? 'active' : ''}}">
            <a href="/dashboard"> <i class="material-icons-two-tone"> dashboard </i>Overview</a>
        </li>
        <li class="{{ request()->is('royalties')? 'active' : ''}}"><a href="/royalties">
            <i class="material-icons-two-tone"> paid </i>Royalties</a></li>
        
            <x-logout-link />

        @break

    @default
      
            <li class="{{ request()->is('dashboard')? 'active' : ''}}"><a href="/dashboard">MUSIC</a></li>
        
@endswitch


       
    </ul>
</div>