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

            <li class="{{ request()->is('royalties')? 'active-page' : ''}}">
                <a href="/royalties">
                    <i class="material-icons-two-tone"> paid </i>
                    Royalties</a>
            </li>

            <li class="sidebar-title">
                ADMIN FUNCTIONS
             </li>
            {{-- <li class="{{ request()->is('record-royalties')? 'active-page' : ''}}">
                <a href="{{url('record-royalties')}}"> 
                    <i class="material-icons-two-tone"> view_kanban </i>
                    Record Royalties
                </a>
            </li> --}}
            {{-- <li class="{{ request()->is('manage-royalties')? 'active-page' : ''}}">
                <a href="{{url('manage-royalties')}}"> 
                    <i class="material-icons-two-tone"> dashboard_customize </i>
                    Manage Royalties
                </a>
            </li> --}}
           
          
            {{-- <li class="{{ request()->is('recover')? 'active-page' : ''}}">
                <a href="{{url('recover')}}"> 
                    <i class="material-icons-two-tone"> restore_page </i>
                    Account Recovery
                </a>
            </li> --}}

            {{-- <li class="{{ request()->is('new-release')? 'active-page' : ''}}">
                <a href="/new-release">
                    <i class="material-icons-two-tone"> library_music </i>
                    Create Releases
                </a>
            </li>

            <li class="{{ request()->is('upload-songs')? 'active-page' : ''}}">
                <a href="/upload-songs">
                    <i class="material-icons-two-tone"> library_add </i>
                    Upload Songs</a>
            </li> --}}
           

            <li>
                <a href="#music"><i class="material-icons-two-tone">view_kanban</i>Royalties<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                <ul class="sub-menu" style="">
                    <li>
                        <a href="{{url('record-royalties')}}">Record Royalties</a>
                    </li>
                    <li>
                        <a href="{{url('manage-royalties')}}">Manage Royalties</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#music"><i class="material-icons-two-tone">library_music</i>Music<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                <ul class="sub-menu" style="">
                    <li>
                        <a href="{{url('new-release')}}">Create Releases</a>
                    </li>
                    <li>
                        <a href="{{url('upload-songs')}}">Upload Songs</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#finance"><i class="material-icons-two-tone">payments</i>Finance<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                <ul class="sub-menu" style="">
                    <li>
                        <a href="{{url('new-release')}}">Record Payment</a>
                    </li>
                    <li>
                        <a href="{{url('new-release')}}">Manage Payouts</a>
                    </li>
                    <li>
                        <a href="{{url('upload-songs')}}">Generate Report</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#settings"><i class="material-icons-two-tone">settings</i>Settings<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                <ul class="sub-menu" style="">
                    <li>
                        <a href="{{url('users')}}">Manage Users</a>
                    </li>
                    <li>
                        <a href="{{url('platforms')}}">Manage Platforms</a>
                    </li>
                    <li>
                        <a href="{{url('recover')}}">Account Recovery</a>
                    </li>
                    {{-- <li>
                        <a href="{{url('user/profile')}}">User Profile</a>
                    </li> --}}
                  
                </ul>
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