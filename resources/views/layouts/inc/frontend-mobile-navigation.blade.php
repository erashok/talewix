<div class="sticky-header fixed d-lg-none d-md-block">
            <div class="text-right">
                <div class="container mobile-menu-fixed pr-5">
                    <h1 class="logo-small navbar-brand"><a href="{{ url('/') }}" class="logo">Merinda</a></h1>

                    <a class="author-avatar" href="#"><img src="assets/images/author-avata-1.jpg" alt=""></a>

                    <a href="javascript:void(0)" class="menu-toggle-icon">
                        <span class="lines"></span>
                    </a>
                </div>
            </div>

            <div class="mobi-menu">
                <div class="mobi-menu__logo">
                    <h1 class="logo navbar-brand"><a href="{{ url('/') }}" class="logo">Merinda</a></h1>
                </div>
                <form action="#" method="get" class="menu-search-form d-lg-flex">
                    <input type="text" class="search_field" placeholder="Search..." value="" name="s">
                </form>
                <nav>
                    <ul>
                         <li class="current-menu-item"><a href="{{ url('/') }}">For You</a></li>
                                @php
                                    $categories = App\Models\Category::where('navbar_status', '1')->where('status','1')->get();
                                @endphp
                                @foreach ($categories as $catitem)
                                    <li><a href="{{ url($catitem->slug) }}">{{ $catitem->name }}</a></li>
                                @endforeach
                    </ul>
                </nav>
            </div>
        </div>