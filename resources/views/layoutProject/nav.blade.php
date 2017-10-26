<!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <a class="navbar-brand" href="/">Merch-Ent</a>
            <div class="collapse navbar-collapse" id="navbarExample">

                <ul class="navbar-nav ml-auto">
                    @if (Route::has('login'))
                        @if (Auth::check())
                        <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="/cart">Cart</a>
                        </li>
                            @else
                        <li class="nav-item">
                                <a class="nav-link" href="/login">Login</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="/register">Register</a>
                        </li>
                             @endif
                       
                    @endif

                    <li class="nav-item">
                        <a class="nav-link" href="/productList">Product Catalog</a>
                    </li>
                
                    @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" 
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ Auth::user()->first_name }}</a>
                    </li>
                    @endif
                    
                </ul>
            </div>
        </div>
    </nav>