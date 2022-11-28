@include('extends.header')
<body id="bodyHome">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container pb-2 pt-2">
            <a class="navbar-brand fs-4" href="{{route('admin_home')}}" id="main">
                Ne<span class="half-font">xt</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('admin_home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin_catalog')}}">Soul Market</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="https://www.instagram.com/">
                            <img src="/images/ig.jpg" alt="instagram" width="45" height="45" class="rounded-circle border border-2 border-white">
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="https://opensea.io/">
                            <img src="/images/opensea.png" alt="opensea" width="45" height="45" class="rounded-circle border border-2 border-white">
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{route('profile')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="profileContainer bg-warning p-5 rounded">
        @if(Session::has('success'))
        <div class="alert alert-success">
            <p>{{Session::get('success')}}</p>
        </div>
        @endif
        <a href="{{route('admin_home')}}">Go Back</a>
        <h2 class="text-center">Profile Details</h2>
        <form action="{{route('change_pw_process')}}" method="POST">
            @method('PUT')
            @csrf
            <label for="nama" class="form-label fs-5">Name</label>
            <input type="text" name="name" value="{{Auth::guard('web')->user()->name}}" class="form-control fs-5" />
            <span class="text-danger fs-5">@error('name') {{$message}} @enderror</span><br />
            <label for="username" class="form-label fs-5">Username</label>
            <input type="text" name="username" value="{{Auth::guard('web')->user()->username}}" class="form-control fs-5" />
            <span class="text-danger fs-5">@error('username') {{$message}} @enderror</span><br />
            <label for="email" class="form-label fs-5">Email</label>
            <input type="text" name="email" value="{{Auth::guard('web')->user()->email}}" class="form-control fs-5" />
            <span class="text-danger fs-5">@error('email') {{$message}} @enderror</span><br />
            <a href="{{route('password_change')}}" class="btn btn-danger mt-4 fs-5">Change Password</a><br />
            <button type="submit" class="btn btn-success mt-4 fs-5">Save Changes</button>
        </form>
    </div>
@include('extends.footer')