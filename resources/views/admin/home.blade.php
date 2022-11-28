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
                        <a class="nav-link active" aria-current="page" href="{{route('admin_home')}}">Home</a>
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
                            <li><a class="dropdown-item" href="{{route('profile', Auth::guard('web')->user()->id)}}">Profile Detail</a></li>
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
    <div class="container">
        <h1>What do we mean by NEXT?</h1>
        <p>
            NEXT is a RPG Game Based NFT. We have characters that you can buy on the opensea website.
            We call that characters "souls". You can buy soul by clicking the link right here, or if you're
            curious about how do our souls look like, you can check the Soul Market first.
        </p>
        <hr style="color: yellow" />
        <h1>About us?</h1>
        <div class="d-flex">
            <p>We are</p>
        </div>
    </div>
@include('extends.footer')