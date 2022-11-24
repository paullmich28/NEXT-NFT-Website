<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEXT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <link href="https://fonts.cdnfonts.com/css/witcher-handwriting" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#" id="main">
                Ne<span class="half-font">xt</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                @if(Auth::guard('web')->check())
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{Auth::guard('web')->user()->name}}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Profile Details</a></li>
                            <li>
                                <a class="dropdown-item" href="{{route('user_logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                Something else here
                                </a>
                            </li>
                        </ul>
                    </li>
                    <form action="{{route('user_logout')}}" id="logout-form" method="POST">
                        @csrf
                    </form>
                @else
                    <a class="btn btn-outline-success mx-3" id="login" href="{{route('login')}}" role="button">
                        <i class="bx bx-log-in mx-auto"></i>
                        Login
                    </a>
                    <a class="btn btn-outline-primary mx-3" id="register" href="{{route('register')}}" role="button">
                        <i class='bx bx-user-plus'></i>
                        Sign Up
                    </a>
                @endif
                </ul>
            </div>
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
                    <h5 data-aos="fade-down" data-aos-duration="1000">Welcome to our website...</h5>
                    <p data-aos="fade-up" data-aos-duration="1000">It seems like you're the chosen one...</p>
                </div>
            </div>
            <div class="carousel-item c-item" data-bs-interval="5000">
                <img src="/images/assetBG2.jpg" class="d-block w-100 c-img" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Right! You're NEXT!</h5>
                    <p>
                        <a href="#" class="text-white">Click</a> here!
                    </p>
                </div>
            </div>
            <div class="carousel-item c-item" data-bs-interval="5000">
                <img src="/images/assetBG3.jpg" class="d-block w-100 c-img" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Are you curious what is this all about?</h5>
                    <a class="btn btn-primary mx-auto mt-3 buttons" href="daftar.php" role="button">
                        <i class='bx bx-user-plus'></i>
                        SIGN UP
                    </a>
                </div>
            </div>
            <div class="carousel-item c-item">
                <img src="/images/assetBG4.jpg" class="d-block w-100 c-img" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Sudah memiliki akun?</h5>
                    <a class="btn btn-success mx-auto mt-3 buttons" href="{{route('login')}}" role="button">
                        <i class="bx bx-log-in mx-auto"></i>
                        LOGIN
                    </a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="positioning1">
        <div class="scroll text p-2">
            <div>
                Testing <span>Doang</span>
            </div>
        </div>
    </div>

    <section id="about" class="about section-padding">
    </section>
    
    <section class="aboutus section-padding bg-info">
    </section>
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/637af4deb0d6371309d023bc/1gic4p25m';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <script>
        function checkingWindow(){
            let login = document.querySelector("#login");
            let register = document.querySelector("#register");
    
            if(window.innerWidth >= 576 && window.innerWidth <= 992){
                login.classList.remove("btn-outline-success");
                login.classList.add("btn-success");
                login.classList.add("mx-auto");
                login.classList.add("mt-2");
    
                register.classList.remove("btn-outline-primary");
                register.classList.add("btn-primary");
                register.classList.add("mx-auto");
                register.classList.add("mt-2");
            }else{
                login.classList.add("btn-outline-success");
                login.classList.remove("btn-success");
                login.classList.remove("mx-auto");
                login.classList.remove("mt-2");
    
                register.classList.add("btn-outline-primary");
                register.classList.remove("btn-primary");
                register.classList.remove("mx-auto");
                register.classList.remove("mt-2");
            }
        }
    
        $(window).scroll(function(){
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
        });
    
        window.onload = checkingWindow;
        setInterval(checkingWindow, 500);
    </script>
</body>
</html>