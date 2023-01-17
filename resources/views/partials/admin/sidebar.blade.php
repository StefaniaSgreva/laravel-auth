{{-- <input type="checkbox" id="nav-toggle"> --}}
<nav class="sidebar">
    {{-- SIDEBAR HEADER --}}
    <div class="sidebar-brand">
        <h2><i class="fa-solid fa-code"></i><span>Boolfolio</span></h2>
    </div>
    {{-- SIDEBAR MENU --}}
    <div class="sidebar-menu">
        <ul>
            <li>
                <a class="{{Route::currentRouteName() == 'admin.dashboard' ? 'active' : ''}}" href="{{route('admin.dashboard')}}">
                    <i class="fa-solid fa-gauge-high"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a class="{{Route::currentRouteName() == 'admin.projects.index' ? 'active' : ''}}" href="{{route('admin.projects.index')}}">
                    <i class="fa-solid fa-folder-open"></i>
                    <span>Projects</span>
                
                </a>
            </li>
            <li>
                <a class="{{Route::currentRouteName() == 'admin.categories.index'  ? 'active' : ''}}" href="{{route('admin.categories.index')}}">
                    <i class="fa-solid fa-rectangle-list"></i>
                    <span>Categories</span>
                </a>
            </li>
            <li>
                <a class="{{Route::currentRouteName() == 'admin.tags.index' ? 'active' : ''}}" href="{{route('admin.tags.index')}}">
                    <i class="fa-solid fa-tags"></i>
                    <span>Tags</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fa-solid fa-user-gear"></i>
                    <span>User</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
