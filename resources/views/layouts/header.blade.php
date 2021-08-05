



<nav class="navbar navbar-expand-lg navbar-light bg-light text-center">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="#">Hidden brand</a>
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('allPost')}}">Post</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Disabled</a>
                        </li>


                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item"> <a  class="nav-link "  href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a></li>
                            @else
                                <li class="nav-item">  <a  class="nav-link "  href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a> </li>

                                @if (Route::has('register'))
                                    <li class="nav-item">   <a  class="nav-link "  href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
                                @endif
                            @endauth
                        @endif
                    </ul>

                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
                        </div>
                    </div>
                </div>

            </nav>




