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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('catalog')}}">Catalog</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="#">
                            <img src="images/ig.jpg" alt="instagram" width="45" height="45" class="rounded-circle border border-2 border-white">
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a href="#">
                            <img src="images/opensea.png" alt="opensea" width="45" height="45" class="rounded-circle border border-2 border-white">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container trigger">
        <div class="overlay rounded">
            <h3 class="desc">Lorem Ipsum dolor sit amet</h3>
            <form action="#">
                <input type="submit" value="Enter the world" class="redirect btn btn-warning mt-4">
            </form>
        </div>
    </div>
    
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active c-item" data-bs-interval="5000">
                <img src="/images/assetBG1.jpg" class="d-block w-100 c-img" alt="...">
            </div>
            <div class="carousel-item c-item" data-bs-interval="5000">
                <img src="/images/assetBG2.jpg" class="d-block w-100 c-img" alt="...">
            </div>
            <div class="carousel-item c-item" data-bs-interval="5000">
                <img src="/images/assetBG3.jpg" class="d-block w-100 c-img" alt="...">
            </div>
            <div class="carousel-item c-item">
                <img src="/images/assetBG4.jpg" class="d-block w-100 c-img" alt="...">
            </div>
        </div>
    </div>

    <div class="positioning1">
        <div class="scroll text p-2">
            <div>
                Testing <span>Doang</span>
            </div>
        </div>
    </div>

@include('extends.footer')