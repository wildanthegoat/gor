<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html" style="color: #1DB954;">Admin</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="{{ Request::is('admin-home-page') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('admin-home-page') }}"><i class="fas fa-home"></i> <span>Home</span></a>
            </li>
            <li class="{{ Request::is('data-member') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('data-member-page') }}"><i class="fas fa-users"></i> <span>Data Member</span></a>
            </li>
            <li class="{{ Request::is('data-lapangan') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('data-lapangan-page') }}"><i class="fas fa-map-marker-alt"></i> <span>Data Lapangan</span></a>
            </li>
            <li class="{{ Request::is('data-pesanan') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('data-pesanan-page') }}"><i class="fas fa-shopping-cart"></i> <span>Data Pesanan</span></a>
            </li>
            <li class="{{ Request::is('data-admin') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('data-admin-page') }}"><i class="fas fa-user-tie"></i> <span>Data Admin</span></a>
            </li>
        </ul>
    </aside>
</div>

<style>
    .sidebar-menu li.active a.nav-link {
        color: #1DB954; /* Change this to the desired color */
    }
</style>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Add active class to the menu item corresponding to the current page
    var url = window.location.href;
    $('.sidebar-menu li').removeClass('active');
    $('.sidebar-menu li').each(function() {
        if (url.indexOf($(this).find('a').attr('href')) > -1) {
            $(this).addClass('active');
        }
    });
});
</script>
