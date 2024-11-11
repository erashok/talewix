 <header id="header" class="d-lg-block d-none">
                <div class="container">
                    <div class="align-items-center w-100">
                        <h1 class="logo float-left navbar-brand"><a href="{{ url('/') }}" class="logo">Talewix.com</a></h1>
                        <div class="header-right float-right w-50">
                            <div class="d-inline-flex float-right text-right align-items-center">
                               
                                <ul class="top-menu heading navbar-nav w-100 d-lg-flex align-items-center">
                                    <li>
                                        <a href="{{ Auth::check() ? url('/new-story') : url('/login') }}" class="btn twr-btn-secondary">
                                           <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                            </svg> Write
                                        </a>
                                    </li>
                                </ul>
                              <div class="dropdown pro-icon">
                                @php
                                    $user = Auth::user();
                                @endphp

                                <a class="author-avatar dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                                    <img src="{{ asset($user && $user->pro_img ? 'upload/user_img/' . $user->pro_img : 'images/user-avatar.svg') }}" alt="Profile">
                                </a>                               
                                <div class="dropdown-menu" aria-labelledby="profileDropdown">
                                    @if (Auth::check())
                                        <!-- Shown when the user is logged in -->
                                        <a class="dropdown-item cursor-not-allowed">{{ Auth::user()->email }}</a>
                                        <a class="dropdown-item" href="{{ url('/profile') }}">My Profile</a>
                                        {{-- <a class="dropdown-item" href="{{ url('/plans') }}">Become a Talewix Member</a> --}}
                                        <a class="dropdown-item" href="{{ url('/getLogout') }}">Logout</a>
                                    @else
                                        <!-- Shown when the user is not logged in -->
                                        <div class="m-3">
                                            <h5 class="mb-2">Get started on Talewix</h5>
                                            <div class="btn-group justify-center">
                                                <a href="{{ url('/login') }}" class="btn btn-outline-primary">Login</a>
                                                <a href="{{ url('/register') }}" class="btn btn-outline-secondary">Register</a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                
                            </div>
                            </div>
                            <form action="{{ url('search') }}" method="GET" class="search-form d-lg-flex float-right">
                                <a href="javascript:void(0)" class="searh-toggle">
                                    <i class="icon-search"></i>
                                </a>
                                <input class="search_field" type="text" name="query" placeholder="Search..." required>
                            </form>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <nav id="main-menu" class="stick d-lg-block d-none">
                    <div class="container">
                        <div class="menu-primary">
                            <ul>
                                <li class="current-menu-item"><a href="{{ url('/') }}">For You</a></li>
                                @php
                                    $categories = App\Models\Category::where('navbar_status', '1')->where('status','1')->get();
                                @endphp
                                @foreach ($categories as $catitem)
                                    <li><a href="{{ url($catitem->slug) }}">{{ $catitem->name }}</a></li>
                                @endforeach
                                
                            </ul>
                            <span></span>
                        </div>
                    </div>
                </nav>
            </header>
            <style>
                    .author-avatar img {
                        border-radius: 50%;
                    }

                    .dropdown-menu {
                        margin-left: -100px;
                    }
                    .pro-icon .dropdown-toggle::after{
                        content: none;
                    }
            </style>