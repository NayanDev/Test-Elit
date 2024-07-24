<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a href="#">
                        @auth
                            <span class="clear"> 
                                <span class="block m-t-xs"> 
                                    <h3 class="m-t-md">{{ auth()->user()->name }}</h3>
                                </span>
                            </span>
                        @endauth
                    </a>
                </div>
                <div class="logo-element">
                    NYT
                </div>
            </li>
                <li class="{{ ($active === "dashboard") ? 'active' : '' }}">
                    <a href="/dashboard"><i class="fa fa-home"></i> <span class="nav-label">Dashboard</span> </a>
                </li>
                <li class="{{ ($active === "mahasiswa") ? 'active' : '' }}">
                    <a href="/mahasiswa"><i class="fa fa-graduation-cap"></i> <span class="nav-label">Mahasiswa</span> </a>
                </li>
                <li class="{{ ($active === "pekerjaan") ? 'active' : '' }}">
                    <a href="/pekerjaan"><i class="fa fa-gears"></i> <span class="nav-label">Pekerjaan</span> </a>
                </li>
                <li class="{{ ($active === "alumni") ? 'active' : '' }}">
                    <a href="/alumni"><i class="fa fa-user-o"></i> <span class="nav-label">Alumni</span> </a>
                </li>
        </ul>

    </div>
</nav>