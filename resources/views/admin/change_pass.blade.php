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
        <a href="{{route('profile')}}">Go Back</a>
        @if(Session::has('success'))
        <div class="alert alert-success">
            <p>{{Session::get('success')}}</p>
        </div>
        @endif
        <h2 class="text-center">Change Password</h2>
        <form action="{{route('change_pw_process')}}" method="POST">
            @method('PUT')
            @csrf
            <label for="old_pass" class="form-label fs-5">Old Password</label>
            <input type="password" name="old_pass" placeholder="Old Password" class="form-control fs-5" />
            @if(Session::has('fail')) <span class="text-danger fs-5">{{Session::get('fail')}}</span><br /> @else
            <span class="text-danger fs-5">@error('old_pass') {{$message}} @enderror</span><br />
            @endif
            <label for="old_pass" class="form-label fs-5">New Password</label>
            <input type="password" name="new_pass" placeholder="New Password" class="form-control fs-5" />
            <span class="text-danger fs-5">@error('new_pass') {{$message}} @enderror</span><br />
            <label for="old_pass" class="form-label fs-5">Confirm Password</label>
            <input type="password" name="c_pass" placeholder="Confirm Password" class="form-control fs-5" />
            <span class="text-danger fs-5">@error('c_pass') {{$message}} @enderror</span><br />
            <button type="submit" class="btn btn-success mt-4">Save Changes</button>
        </form>
    </div>
@include('extends.footer')