@switch(Auth::user()->user_role)
    
    @case('admin')

        <ul class="nav menu">
            <li class="active"><a href="/dashboard">MUSIC</a></li>
            <li><a href="/new-release">RELEASES</a></li>
            <li><a href="/upload-songs">UPLOADS</a></li>
            <li><a href="/royalties">ROYALTIES</a></li>
            <li><a href="/manage">MANAGE</a></li>
            <li> <a href="/users">USERS</a></li>
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
            <li class="active"><a href="/dashboard">MUSIC</a></li>
        </ul>
@endswitch
