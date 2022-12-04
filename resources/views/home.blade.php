@include('extends.header')
<body id="bodyHome">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container pb-2 pt-2">
            <a class="navbar-brand fs-4" href="{{route('homepage')}}" id="main">
                Ne<span class="half-font">xt</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('catalog')}}">Soul Market</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="https://www.instagram.com/">
                            <img src="images/ig.jpg" alt="instagram" width="45" height="45" class="rounded-circle border border-2 border-white">
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="https://opensea.io/">
                            <img src="images/opensea.png" alt="opensea" width="45" height="45" class="rounded-circle border border-2 border-white">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@include('extends.home')
@include('extends.footer')