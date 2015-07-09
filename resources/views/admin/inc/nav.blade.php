<nav class="navbar">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ URL::route('home') }}">YZ CMS</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="{{ URL::route('admin.user.index') }}">Members</a>
                </li>
                <li class="dropdown">
                    <a href="{{ URL::route('admin.role.index') }}">Roles</a>
                </li>
                <li class="dropdown">
                    <a href="{{ URL::route('admin.permission.index') }}">Permissions</a>
                </li>
                @if(Auth::check())
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{-- URL::route('logout') --}}">Sign out</a>
                        </li>
                    </ul>
                </li>
                @else
                <li>
                    <a href="{{ URL::route('home')}}">Sign In</a>
                </li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
