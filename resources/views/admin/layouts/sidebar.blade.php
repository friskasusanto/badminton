<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{url('/dasboard')}}"
                        aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                            class="hide-menu">Dashboard</span></a>
                </li>

                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Admin</span></li>
                <li class="sidebar-item"> 
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="hide-menu">Gallery</span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level ">
                        <li class="sidebar-item">
                            <a href="{{url('/indexName')}}" class="sidebar-link">
                                <span class="hide-menu">Add Gallery Name</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{url('/indexImg')}}" class="sidebar-link">
                                <span class="hide-menu">Add Gallery Image</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item"> 
                    <a href="{{url('/venue', '1')}}" class="sidebar-link">
                        <span class="hide-menu">Schedule & Venue</span>
                    </a>
                </li>
                <li class="sidebar-item"> 
                    <a href="{{url('/tournament', '1')}}" class="sidebar-link">
                        <span class="hide-menu">Tournament</span>
                    </a>
                </li>
                <li class="sidebar-item"> 
                    <a href="{{url('/partner', '1')}}" class="sidebar-link">
                        <span class="hide-menu">Partner</span>
                    </a>
                </li>
                <li class="sidebar-item"> 
                    <a href="{{url('/membership', '1')}}" class="sidebar-link">
                        <span class="hide-menu">Membership</span>
                    </a>
                </li>
                <li class="sidebar-item"> 
                    <a href="{{url('/contact', '1')}}" class="sidebar-link">
                        <span class="hide-menu">Contact</span>
                    </a>
                </li>
                <li class="sidebar-item"> 
                    <a href="{{url('/aboutUs', '1')}}" class="sidebar-link">
                        <span class="hide-menu">AboutUs</span>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->