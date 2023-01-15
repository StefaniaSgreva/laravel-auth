<header>
    <h2>
        <label for="">
            <i class="fa-solid fa-bars"></i>
        </label>
        Dashboard
    </h2>
    <div class="search-wrapper">
        <i class="fa-solid fa-magnifying-glass-arrow-right"></i>
        <input type="search" placeholder="Search here">
    </div>
    <div class="user-wrapper">
        <img src="" width="40px" height="40px" alt="user profile photo">
        <div>
            <h4>Stefania Sgreva</h4>
            <small>Super admin</small>
            <span class="logout">
                <a class="ms-3" href="{{route('logout')}}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" title="Logout">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                Logout
                </a>
                <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
                    @csrf
                </form>
            </span>
            
        </div>
    </div>
</header>