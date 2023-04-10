<aside class="app-navbar">
    <!-- begin sidebar-nav -->
    <div class="sidebar-nav scrollbar scroll_light">
        <ul class="metismenu " id="sidebarNav">
            <li class="nav-static-title">Menu</li>

            <li class="{{ request()->is('admin') ? 'active' : '' }}">
                <a href="{{ route('admin.home') }}" aria-expanded="false">
                    <i class="nav-icon ti ti-layout-grid2"></i>
                    <span class="nav-title">Dashboard</span>
                </a>
            </li>

            <li class="{{ request()->is('admin/countries') ? 'active' : '' }}">
                <a href="{{ route('admin.countries.index') }}" aria-expanded="false">
                    <i class="nav-icon ti ti-layers-alt"></i>
                    <span class="nav-title">Country</span>
                </a>
            </li>

            <li class="{{ request()->is('admin/schools') ? 'active' : '' }}">
                <a href="{{ route('admin.schools.index') }}" aria-expanded="false">
                    <i class="nav-icon ti ti-layers-alt"></i>
                    <span class="nav-title">Schools</span>
                </a>
            </li>

            <li class="{{ request()->is('admin/events') ? 'active' : '' }}">
                <a href="{{ route('admin.events.index') }}" aria-expanded="false">
                    <i class="nav-icon ti ti-layers-alt"></i>
                    <span class="nav-title">Events</span>
                </a>
            </li>

            <li class="{{ request()->is('admin/categories') ? 'active' : '' }}">
                <a href="{{ route('admin.categories.index') }}" aria-expanded="false">
                    <i class="nav-icon ti ti-tag"></i>
                    <span class="nav-title">Blogs Category</span>
                </a>
            </li>

            <li class="{{ request()->is('admin/blogs') ? 'active' : '' }}">
                <a href="{{ route('admin.blogs.index') }}" aria-expanded="false">
                    <i class="nav-icon ti ti-tag"></i>
                    <span class="nav-title">Blogs</span>
                </a>
            </li>

            <li>
                <a href="" aria-expanded="false">
                    <i class="nav-icon ti ti-panel"></i>
                    <span class="nav-title">Testimonals</span>
                </a>
            </li>

            <li>
                <a href="" aria-expanded="false">
                    <i class="nav-icon ti ti-settings"></i>
                    <span class="nav-title">Contact Messages</span>
                </a>
            </li>


            <li class="sidebar-banner p-4  text-center m-3 d-block rounded">

            </li>
        </ul>
    </div>
    <!-- end sidebar-nav -->
</aside>
