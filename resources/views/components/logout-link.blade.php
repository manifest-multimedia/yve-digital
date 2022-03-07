    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    <li>
        <a href="{{route('logout')}}" onclick="event.preventDefault();logout()">
            <i class="material-icons"> logout </i>
            {{ __('Logout') }}
        </a>   
    </li>
    <form id="logout" action="{{ route('logout') }}" method="POST" style="padding-bottom:40px">
        @csrf
    </form>