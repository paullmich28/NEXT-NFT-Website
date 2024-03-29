@include('extends.header')
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
                    <a class="nav-link" href="{{route('catalog')}}">NEXT-NFT STORE</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
    <h1 class="text-white">How to become a collaborator?</h1>
    <p class="text-white">Apakah anda ingin menjadi seorang kolaborator NEXT untuk mendapat kesempatan listing NFT anda di website ini?</p>
    <p class="text-white">Jika iya maka kirimkanlah sebuah email yang ditujukan kepada <span class="fw-bold">next.nft@gmail.com</span> dengan format email sebagai berikut:</p>
    <p class="col-4 m-5 p-5 rounded bg-warning">
        “Halo, selamat siang/sore/malam, nama saya (nama/alias), saya ingin menjadi seorang kolaborator dengan anda agar nft saya bisa di masukkan kedalam catalog, 
        ini adalah 4 sample nft saya yang bertema (nama tema), jika anda tertarik dalam menjadikan saya seorang kolaborator maka tolong hubungi saya melalui 
        (kontak yg bisa dihubungi (WhatsApp, LINE, Email))”
    </p>
</div>
@include('extends.footer')