{{--<div class="page-wrapper chiller-theme toggled">--}}
{{--    <div class="mccity"--}}
{{--         style="background-image: url('{{asset('/img/wallpapers/mcclight.png')}}'); background-repeat: no-repeat; background-size: cover ">--}}

{{--    </div>--}}
{{--    <div id="show-sidebar" class="btn btn-sm btn-dark">--}}
{{--        <i class="fas fa-bars"></i>--}}
{{--    </div>--}}
{{--    <nav id="sidebar" class="sidebar-wrapper">--}}
{{--        <div class="sidebar-content">--}}
{{--            <div class="sidebar-brand">--}}
{{--                <a href="/"><img src="https://minecraftercity.com/images/logo.png" style="max-width: 120px"></a>--}}
{{--                <div id="close-sidebar">--}}
{{--                    <i class="fas fa-times"></i>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--                    <div class="sidebar-header">--}}
{{--                        <div class="user-pic">--}}
{{--                            <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"--}}
{{--                                 alt="User picture">--}}
{{--                        </div>--}}
{{--                        <div class="user-info">--}}
{{--                  <span class="user-name"><strong>Shayley</strong>--}}
{{--                  </span>--}}
{{--                            <span class="user-role">Owner</span>--}}
{{--                            <span class="user-status">--}}
{{--                    <i class="fa fa-circle"></i>--}}
{{--                    <span>Online</span>--}}
{{--                  </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--        <!-- sidebar-header  -->--}}
{{--            <div class="sidebar-menu">--}}
{{--                <ul>--}}
{{--                    <li class="sidebar-dropdown">--}}
{{--                    @guest--}}
{{--                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                        @if (Route::has('register'))--}}
{{--                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                        @endif--}}
{{--                    </li>--}}
{{--                    @else--}}
{{--                        <li class="sidebar">--}}
{{--                            @if ( Auth::user()->profile_image == null)--}}
{{--                            <img src="https://upload.wikimedia.org/wikipedia/commons/a/ad/Placeholder_no_text.svg" style="width: 60px; height: 60px; border-radius: 50%; margin-left: 105px;">--}}

{{--                            @else--}}
{{--                            <img src="{{ asset(auth()->user()->image) }}" style="width: 60px; height: 60px; border-radius: 50%; margin-left: 105px;">--}}
{{--                            @endif--}}
{{--                            <a class="nav-link-role" href="/profile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                {{ Auth::user()->name }}--}}
{{--                            </a>--}}

{{--                            <a class="nav-link" href="/profile">--}}
{{--                                <i class="fas fa-user"></i>--}}
{{--                                Profile</a>--}}

{{--                                <a class="nav-link" href="{{ route('logout') }}"--}}
{{--                                   onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                    <i class="fas fa-sign-out-alt"></i>--}}
{{--                                    {{ __('Logout') }}--}}
{{--                                </a>--}}

{{--                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                    @csrf--}}
{{--                                </form>--}}
{{--                        </li>--}}
{{--                        @endguest--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}

{{--            <div class="sidebar-search">--}}
{{--                <div>--}}
{{--                    <div class="input-group">--}}
{{--                        <input type="text" class="form-control search-menu" placeholder="Search...">--}}
{{--                        <div class="input-group-append">--}}
{{--                                          <span class="input-group-text">--}}
{{--                                            <i class="fa fa-search" aria-hidden="true"></i>--}}
{{--                                          </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- sidebar-search  -->--}}
{{--            <div class="sidebar-menu">--}}
{{--                <ul>--}}
{{--                    <li class="header-menu">--}}
{{--                        <span>Forum</span>--}}
{{--                    </li>--}}
{{--                    <li class="sidebar-dropdown">--}}
{{--                        <a href="/">--}}
{{--                            <i class="fas fa-home"></i>--}}
{{--                            <span>Home</span>--}}
{{--                            <span class="badge badge-pill badge-warning">WIP</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="sidebar-dropdown">--}}
{{--                        <a href="/forums">--}}
{{--                            <i class="fab fa-wpforms"></i>--}}
{{--                            <span>Forums</span>--}}
{{--                            <span class="badge badge-pill badge-warning">Busy</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="sidebar-dropdown">--}}
{{--                        <a href="/members">--}}
{{--                            <i class="fas fa-user"></i>--}}
{{--                            <span>Members</span>--}}
{{--                            <span class="badge badge-pill badge-primary">W.I.P</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="sidebar-dropdown">--}}
{{--                        <a href="/news">--}}
{{--                            <i class="far fa-newspaper"></i>--}}
{{--                            <span>News</span>--}}
{{--                            <span class="badge badge-pill badge-primary">W.I.P</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="sidebar-dropdown">--}}
{{--                        <a href="/vote">--}}
{{--                            <i class="fa fa-chart-line"></i>--}}
{{--                            <span>Vote</span>--}}
{{--                            <span class="badge badge-pill badge-primary">W.I.P</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="sidebar-dropdown">--}}
{{--                        <a href="/help">--}}
{{--                            <i class="far fa-question-circle"></i>--}}
{{--                            <span>Help</span>--}}
{{--                            <span class="badge badge-pill badge-primary">W.I.P</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="header-menu">--}}
{{--                        <span>More</span>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="https://minecraftercity.com/">--}}
{{--                            <i class="fas fa-shopping-cart"></i>--}}
{{--                            <span>Store</span>--}}
{{--                                                        <span class="badge badge-pill badge-primary">W.I.P</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#">--}}
{{--                            <i class="fa fa-calendar"></i>--}}
{{--                            <span>Events</span>--}}
{{--                            <span class="badge badge-pill badge-primary">W.I.P</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <!-- sidebar-menu  -->--}}
{{--        </div>--}}
{{--    </nav>--}}
{{--</div>--}}

<!--    Made by Erik Terwan    -->
<!--   24th of November 2015   -->
<!--        MIT License        -->
<nav role="navigation">
    <div id="menuToggle">
        <!--
        A fake / hidden checkbox is used as click reciever,
        so you can use the :checked selector on it.
        -->
        <input type="checkbox"/>

        <!--
        Some spans to act as a hamburger.

        They are acting like a real hamburger,
        not that McDonalds stuff.
        -->
        <span></span>
        <span></span>
        <span></span>

        <!--
        Too bad the menu has to be inside of the button
        but hey, it's pure CSS magic.
        -->
        <ul id="menu">

            <a href="/"><img src="https://minecraftercity.com/images/logo.png" style="max-width: 120px; margin-left: 15%"></a>

            @guest
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            @if (Route::has('register'))
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
                </li>
            @else
                <li class="sidebar">
                    @if ( Auth::user()->profile_image == null)
                        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ad/Placeholder_no_text.svg"
                             style="width: 60px; height: 60px; border-radius: 50%; margin-left: 54px;">

                    @else
                        <img src="{{ asset(auth()->user()->image) }}"
                             style="width: 60px; height: 60px; border-radius: 50%; margin-left: 54px;">
                    @endif
                    <a class="nav-link-role" href="/profile" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <a class="nav-link" href="/profile">
                        <i class="fas fa-user"></i>
                        Profile</a>

                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                @endguest
                </li>
                <li>
                    <a href="/" class="nav-link-menu">
                        <i class="fas fa-home"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="/forums" class="nav-link-menu">
                        <i class="fab fa-wpforms"></i>
                        Forums</a>
                </li>
                <li>
                    <a href="/members" class="nav-link-menu">
                        <i class="fas fa-user"></i>
                        Members</a>
                </li>
                <li>
                    <a href="/news" class="nav-link-menu">
                        <i class="far fa-newspaper"></i>
                        News
                    </a>
                </li>
                <li>
                    <a href="/vote" class="nav-link-menu">
                        <i class="fa fa-chart-line"></i>
                        Vote
                    </a>
                </li>
                <li>
                    <a href="/help" class="nav-link-menu">
                        <i class="far fa-question-circle"></i>
                        Help
                    </a>
                </li>
                <li>
                    <a href="/" class="nav-link-menu">
                        <i class="fas fa-shopping-cart"></i>
                        Store
                    </a>
                </li>
        </ul>
    </div>
</nav>

{{--<script src="{{asset('js/slide.js')}}"></script>--}}

