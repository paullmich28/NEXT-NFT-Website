@include('extends.header')
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container pb-2 pt-2">
        <a class="navbar-brand fs-3 mx-auto mainJudul" href="#" id="main">
            Ne<span class="half-font">xt</span>
        </a>
    </div>
</nav>

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
            <div class="carousel-caption d-none d-md-block">
                <div class="overlay mx-auto rounded">
                    <h3 class="desc" data-aos="fade-up" data-aos-duration="1000">Lorem Ipsum dolor sit amet</h3>
                    <a href="{{route('index')}}" class="redirect btn btn-warning mt-4" data-aos="fade-down" data-aos-duration="1000">Enter the world...</a>
                </div>
            </div>
        </div>
        <div class="carousel-item c-item" data-bs-interval="5000">
            <img src="/images/assetBG2.jpg" class="d-block w-100 c-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <div class="overlay mx-auto rounded">
                    <h3 class="desc" data-aos="fade-up" data-aos-duration="1000">Lorem Ipsum dolor sit amet</h3>
                    <a href="{{route('index')}}" class="redirect btn btn-warning mt-4" data-aos="fade-down" data-aos-duration="1000">Enter the world...</a>
                </div>
            </div>
        </div>
        <div class="carousel-item c-item" data-bs-interval="5000">
            <img src="/images/assetBG3.jpg" class="d-block w-100 c-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <div class="overlay mx-auto rounded">
                    <h3 class="desc" data-aos="fade-up" data-aos-duration="1000">Lorem Ipsum dolor sit amet</h3>
                    <a href="{{route('index')}}" class="redirect btn btn-warning mt-4" data-aos="fade-down" data-aos-duration="1000">Enter the world...</a>
                </div>
            </div>
        </div>
        <div class="carousel-item c-item">
            <img src="/images/assetBG4.jpg" class="d-block w-100 c-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <div class="overlay mx-auto rounded">
                    <h3 class="desc" data-aos="fade-up" data-aos-duration="1000">Lorem Ipsum dolor sit amet</h3>
                    <a href="{{route('index')}}" class="redirect btn btn-warning mt-4" data-aos="fade-down" data-aos-duration="1000">Enter the world...</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="positioning1">
    <div class="scroll text p-2 bg-warning">
        <div>
            We're going to show you the NEXT big thing!
        </div>
    </div>
</div>
@include('extends.footer')