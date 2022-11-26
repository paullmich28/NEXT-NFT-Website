@include('extends.header')
    <body id="bodyHome">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container pb-2 pt-2">
            <a class="navbar-brand fs-4" href="#" id="main">
                Ne<span class="half-font">xt</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('admin_home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin_catalog')}}">Catalog</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="#">
                            <img src="/images/ig.jpg" alt="instagram" width="45" height="45" class="rounded-circle border border-2 border-white">
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="#">
                            <img src="/images/opensea.png" alt="opensea" width="45" height="45" class="rounded-circle border border-2 border-white">
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{Auth::guard('web')->user()->name}}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Profile Detail</a></li>
                            <li>
                                <a href="{{route('user_logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item">Logout</a>
                                <form action="{{route('user_logout')}}" id="logout-form" method="POST">
                                    @csrf
                                </form>
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@include('extends.footer')