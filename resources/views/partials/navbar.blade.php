<div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
    <ul class="navbar-nav  ">
        <li class="nav-item active">
            <a class="nav-link" href="/"> Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="{{ route('vehicle') }}"> About </a>
        </li>

        <li class="nav-item ">
            <a class="nav-link" href="{{ route('vehicle') }}"> Teacher </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('vehicle') }}"> vehicle </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('vehicle') }}">Contact Us</a>
        </li>

        @if (auth()->check())
        <!-- Logout Button -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    @else
        <!-- Login Button -->
        <a class="btn btn-primary me-2 mr-2" href="{{ route('login') }}">Login</a>
    
        <!-- Register Button -->
        <a class="btn btn-success" href="{{ route('register') }}">Register</a>
    @endif
    


    </ul>
    <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
        <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
    </form>
</div>
