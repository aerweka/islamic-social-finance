<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item active" data-item="dashboard">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Bar-Chart"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <div class="triangle"></div>
            </li>
        </ul>
    </div>

    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <i class="sidebar-close i-Close" (click)="toggelSidebar()"></i>
        <header>
            <div class="logo">
                <h2 class="font-weight-bolder">ISF</h2>
            </div>
        </header>
        <!-- Submenu Dashboards -->
        <div class="submenu-area" data-parent="dashboard">
            <header>
                <h6>Dashboards</h6>
                <p>Selamat Datang</p>
            </header>
            <ul class="childNav" data-parent="dashboard">
                <li class="nav-item ">
                    <a class="{{ Route::currentRouteName() == '*/./*' ? 'open' : '' }}"
                        href="{{ route(auth()->user()->is_admin ? 'admin.dashboard' : 'survey.user.dashboard') }}">
                        <i class="nav-icon i-Bar-Chart"></i>
                        <span class="item-name">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="{{ Route::currentRouteName() == 'admin.user./*' ? 'open' : '' }}"
                        href="{{ auth()->user()->is_admin ? '/admin/konfig/user' : route('survey.user.edit', ['user' => auth()->user()->id]) }}">
                        <i class="nav-icon i-Administrator"></i>
                        <span class="item-name">Akun</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-overlay"></div>
</div>
<!--=============== Left side End ================-->
