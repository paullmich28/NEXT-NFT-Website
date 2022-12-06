@include('extends.header')
@livewireStyles
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container pb-2 pt-2">
        <a class="navbar-brand fs-4" href="{{route('index')}}" id="main">
            Ne<span class="half-font">xt</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('index')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('catalog')}}">NEXT-NFT STORE</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        About
                    </a>
                    <ul class="dropdown-menu about">
                        <li><a class="dropdown-item" href="{{route('faq')}}">FAQ</a></li>
                        <li><a href="{{route('collab')}}" class="dropdown-item">Be a Collaborator</a></li>
                    </ul>
                </li>
                <li class="nav-item mx-2">
                    <a href="https://www.instagram.com/next_artc/">
                        <img src="images/ig.jpg" alt="instagram" width="45" height="45" class="rounded-circle border border-2 border-white">
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a href="https://opensea.io/NEXT_ARTC">
                        <img src="images/opensea.png" alt="opensea" width="45" height="45" class="rounded-circle border border-2 border-white">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <h2 class="text-warning">NEXT-NFT STORE</h2>
</div>

@livewire('products')   
@livewireScripts 
@include('extends.footer')