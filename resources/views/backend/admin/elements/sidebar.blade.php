<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
<div class="slimscroll-menu" id="remove-scroll">
    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu" id="side-menu">
            <li class="menu-title">Menu</li>
            <li>
                <a href="{{ url('/admin/home') }}" class="waves-effect">
                    <i class="icon-accelerator"></i><span> Dashboard </span>
                </a>
            </li>

            <li>
                <a href="javascript:void(0);" class="waves-effect"><i class="icon-diamond"></i><span> Products <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                <ul class="submenu">
                    <li><a href="{{ url('/admin-products') }}">Catalog</a></li>
                    <li><a href="{{url('admin-category')}}">Categories</a></li>
                    <li><a href="{{ url('/admin-brand') }}">Brands</a></li>
                    <li><a href="{{ url('/admin-tags') }}">Tags</a></li>
                    <li><a href="{{ url('/admin-customer-review') }}">Reviews</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" class="waves-effect"><i class="icon-music-random"></i><span> Sales <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                <ul class="submenu">
                    <li><a href="email-inbox.html">Orders</a></li>
                    <li><a href="email-read.html">Transactions</a></li>
                </ul>
            </li>

            <li>
                <a href="{{ url('/admin-flash') }}" class="waves-effect"><i class="icon-calendar"></i><span> Flash Sales </span></a>
            </li>

            <li>
                <a href="calendar.html" class="waves-effect"><i class="icon-pricetag"></i><span> Coupons </span></a>
            </li>

            <li>
                <a href="calendar.html" class="waves-effect"><i class="icon-paper-sheet"></i><span> Pages </span></a>
            </li>

            <li>
                <a href="javascript:void(0);" class="waves-effect"><i class="icon-profile"></i><span> Users <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                <ul class="submenu">
                    <li><a href="email-inbox.html">Users</a></li>
                    <li><a href="email-read.html">Roles</a></li>
                </ul>
            </li>

            <li>
                <a href="calendar.html" class="waves-effect"><i class="icon-graph"></i><span> Reports </span></a>
            </li>

            <li>
                <a href="calendar.html" class="waves-effect"><i class="icon-setting-2"></i><span> Settings </span></a>
            </li>

        </ul>

        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
