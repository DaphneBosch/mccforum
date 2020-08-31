<div class="page-wrapper chiller-theme toggled">
    <div class="mccity"
         style="background-image: url('{{asset('/img/wallpapers/mcc2.jpg')}}'); background-repeat: no-repeat; background-size: cover ">

    </div>
    <div id="show-sidebar" class="btn btn-sm btn-dark">
        <i class="fas fa-bars"></i>
    </div>
    <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
            <div class="sidebar-brand">
                <a href="/"><img src="https://minecraftercity.com/images/logo.png" style="max-width: 170px"></a>
                <div id="close-sidebar">
                    <i class="fas fa-times"></i>
                </div>
            </div>
        {{--            <div class="sidebar-header">--}}
        {{--                <div class="user-pic">--}}
        {{--                    <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"--}}
        {{--                         alt="User picture">--}}
        {{--                </div>--}}
        {{--                <div class="user-info">--}}
        {{--          <span class="user-name"><strong>Shayley</strong>--}}
        {{--          </span>--}}
        {{--                    <span class="user-role">Owner</span>--}}
        {{--                    <span class="user-status">--}}
        {{--            <i class="fa fa-circle"></i>--}}
        {{--            <span>Online</span>--}}
        {{--          </span>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        <!-- sidebar-header  -->
            <div class="sidebar-menu">
                <ul>
                    <li class="sidebar-dropdown">
                    @guest
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    </li>
                    @else
                        <li class="sidebar">
                            <a class="nav-link-role" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                                <a class="nav-link" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                        </li>
                        @endguest
                    </li>
                </ul>
            </div>

            <div class="sidebar-search">
                <div>
                    <div class="input-group">
                        <input type="text" class="form-control search-menu" placeholder="Search...">
                        <div class="input-group-append">
                                          <span class="input-group-text">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                          </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- sidebar-search  -->
            <div class="sidebar-menu">
                <ul>
                    <li class="header-menu">
                        <span>Forum</span>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="/">
                            <i class="fas fa-home"></i>
                            <span>Home</span>
                            <span class="badge badge-pill badge-warning">WIP</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="/forums">
                            <i class="fab fa-wpforms"></i>
                            <span>Forums</span>
                            <span class="badge badge-pill badge-warning">Busy</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="/members">
                            <i class="fas fa-user"></i>
                            <span>Members</span>
                            <span class="badge badge-pill badge-primary">W.I.P</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="far fa-newspaper"></i>
                            <span>News</span>
                            <span class="badge badge-pill badge-primary">W.I.P</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="/vote">
                            <i class="fa fa-chart-line"></i>
                            <span>Vote</span>
                            <span class="badge badge-pill badge-primary">W.I.P</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="far fa-question-circle"></i>
                            <span>Help</span>
                            <span class="badge badge-pill badge-primary">W.I.P</span>
                        </a>
                    </li>
                    <li class="header-menu">
                        <span>More</span>
                    </li>
                    <li>
                        <a href="https://minecraftercity.com/">
                            <i class="fas fa-shopping-cart"></i>
                            <span>Store</span>
                            {{--                            <span class="badge badge-pill badge-primary">W.I.P</span>--}}
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-calendar"></i>
                            <span>Events</span>
                            <span class="badge badge-pill badge-primary">W.I.P</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- sidebar-menu  -->
        </div>
    </nav>
</div>

<script src="{{asset('js/slide.js')}}"></script>
