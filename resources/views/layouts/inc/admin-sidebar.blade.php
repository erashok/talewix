  <!-- START SIDEBAR-->
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <ul class="admin-block side-menu metismenu">
                    <li>
                        <a class="active" href="{{url('admin/dashboard')}}"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="heading">FEATURES</li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-sitemap"></i>
                            <span class="nav-label">Category List</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{url('admin/add-category')}}">Add Category</a>
                            </li>
                            <li>
                                <a href="{{url('admin/category')}}">View Category</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-file-text"></i>
                            <span class="nav-label">Post List</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{url('admin/add-post')}}">Add post</a>
                            </li>
                            <li>
                                <a href="{{url('admin/posts')}}">View post</a>
                            </li>
                        </ul>
                    </li>
                    <li class="heading">PAGES</li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-file-text"></i>
                            <span class="nav-label">Plans List</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{url('admin/add-plan')}}">Add post</a>
                            </li>
                            <li>
                                <a href="{{url('admin/plans')}}">View post</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="{{ Request::is('admin/users') ? 'active':''}}" href="javascript:;"><i class="sidebar-item-icon fa fa-envelope"></i>
                            <span class="nav-label">User</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a class="{{ Request::is('admin/users') ? 'active':''}}" href="{{url('admin/users')}}">Users</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('admin/settings')}}"><i class="sidebar-item-icon fa fa-calendar"></i>
                            <span class="nav-label">Setting</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- END SIDEBAR-->