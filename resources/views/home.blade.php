@include('extends.header')
<body id="bodyHome">
    <nav class="navbar navbar-expand-lg navbar-dark static-top">
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
    <div class="container text-center">
        <img src="/images/assetBG4.jpg" class="w-100 h-50"/>
        <hr style="color: yellow">
    </div>
    <div class="px-4 mt-md-4 container">
        <div class="mb-5 row">
            <div class="col">
            <div class="mb-4 row">
                <div class="mb-4 col-lg-7 col-12">
                    <h1 class="d-flex font-italic mb-3 text-white">WELCOME TO NEXT</h1>
                    <p class="text-white mb-0">Kamu baru saja masuk kedalam dunia seni digital. NEXT merupakan sebuah platform perkumpulan Karya Seni digital yang unik dan bisa kamu koleksi. Masuk ke Soul Market untuk melihat karya-karya yang ada di dunia NEXT. NEXT merupakan koleksi project NFT berisi lebih dari 50+ unique art collection yang berada pada opensea market.</p>
                </div>
                <div class="my-lg-auto col-lg-4 col-12 offset-lg-1">
                    <div class="common-container">
                        <div class="row">
                            <div class="pb-2 pr-2 col-6">
                            <img width="150px" height="150px" src="/images/assetBG1.jpg" style="object-fit: cover" />
                        </div>
                        <div class="pb-2 pl-2 col-6">
                            <img width="150px" height="150px" src="/images/assetBG2.jpg" style="object-fit: cover"/>
                        </div>
                        <div class="row">
                            <div class="pt-2 pr-2 col-6">
                                <img width="150px" height="150px" src="/images/assetBG3.jpg" style="object-fit: cover"/>
                            </div>
                            <div class="pt-2 pr-2 col-6">
                                <img width="150px" height="150px" src="/images/assetBG4.jpg" style="object-fit: cover"/>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-12">
    
        </div>
        <div class="mb-2 mb-lg-0 col-lg-7 col-12">
        </div>
        </div>
    </div>
    </div>
    <div class="p-4 m-auto bg-warning rounded w-50">
        <h3>BUY NEXT</h3>
        <p>Lihat koleksi NEXT pada link opensea dibawah ini.</p>
        <div class="m-auto col-lg-3 col-12 offset-lg-1">
            <a href="https://opensea.io/collection/boredapeyachtclub">
                <button class="btn btn-dark" type="button">BUY NEXT ON OPENSEA</button>
            </a>
        </div>
    </div>
    <hr class="mb-5" style="color: yellow">
    <div class="mb-5 row">
        <div class="col">
            <div class="common-container">
                <div class="row">
                    <div class="mb-3 col-lg-7 col-12">
                        <h2 class="text-white mb-3">SPECIFICATION</h2>
                        <p class="text-white">Setiap karya yang ada pada NEXT memiliki keunikan masing-masing. NEXT yang diupload merupakan karakter-karakter original dalam bentuk 2.5D yang memiliki tingkat (rare) yang berbeda.<br>
                        <br>NEXT diupload dengan kualitas HD.<br>
                        <br>NEXT dapat dibeli di (mana) dengan harga yang berbeda-beda sesuai dengan character yang akan dibeli.</p>
                    </div>
                    <div class="my-auto col-lg-4 col-12 offset-lg-1">
                        
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mb-5" style="color: yellow">
        <div class="mb-5 row">
            <div class="col">
                <div class="row">
                    <div class="mb-5 row">
                        <div class="col">
                            <div id="team" class="common-container">
                                <div class="row">
                                    <div class="mb-3 col-lg-7 col-12">
                                        <h2 class="text-white mb-3">THE TEAM</h2>
                                        <p class="text-white">
                                            NEXT dibuat oleh tim yang berisikan 6 orang dimana terdiri dari 1 project manager, 4 programmer, dan 1 artist.
                                        </p>
                                        <p class="text-white">
                                            JONATHAN HARIWINARTA,
                                            THE CREATOR, THE MASTERMIND OF THIS NFT :)
                                        </p>
                                        <p class="text-white">
                                            LIUSIANTO,
                                            SECOND PROGRAMMER
                                        </p>
                                        <p class="text-white">
                                            JONATHAN DHARMA SETIAWAN
                                            , THE DATABASE ENJOYER
                                        </p>
                                        <p class="text-white">
                                            PAULUS MICHAEL LEANG,
                                            PROGRAMMER HANDAL PALING TAMVAN
                                        </p>
                                        <p class="text-white">
                                            JAMES BERNARD WILLIAM,
                                            BASKETMBALL
                                        </p>
                                        <p class="text-white">
                                            ARTIST,
                                            KOMISI PER NFT
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@include('extends.footer')