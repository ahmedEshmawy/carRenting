<nav id="mainnav-container">
    <!--Brand logo & name-->
    <!--================================-->
    <div class="navbar-header">
        <a href="index.html" class="navbar-brand">
            <i class="fa fa-forumbee brand-icon"></i>
            <div class="brand-title">
                <span class="brand-text">WOW</span>
            </div>
        </a>
    </div>
    <!--================================-->
    <!--End brand logo & name-->
    <div id="mainnav">
        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">
                    <ul id="mainnav-menu" class="list-group">
                        <!--Category name-->
                        <li class="list-header">Navigation</li>
                        <!--Menu list item-->
                        <li> <a href="{{url('admin/dashboard')}}"> <i class="fa fa-home"></i> <span class="menu-title">
                                    Dashboard </span> </a> </li>

                        <li>
                            <a href="{{url('/admin/reservations')}}">
                                <i class="fa fa-briefcase"></i>
                                <span class="menu-title">Reservations</span>
                            </a>

                        </li>
                        <!--Menu list item-->
                        <li>
                            <a href="{{url('/admin/cars')}}">
                                <i class="fa fa-file"></i>
                                <span class="menu-title">Cars</span>

                            </a>


                        </li>
                        <!--Menu list item-->
                        <li>
                            <a href="{{url('/admin/users')}}">
                                <i class="fa fa-table"></i>
                                <span class="menu-title">Users</span>

                            </a>

                        </li>
                        <!--Menu list item-->
                        <li>
                            <a href="{{url('/admin/drivers')}}">
                                <i class="fa fa-edit"></i>
                                <span class="menu-title">Drivers</span>

                            </a>

                        </li>

                    </ul>

                    <!--================================-->
                    <!--End widget-->
                </div>
            </div>
        </div>
        <!--================================-->
        <!--End menu-->
    </div>
</nav>
