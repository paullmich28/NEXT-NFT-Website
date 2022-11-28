    <hr style="color: white"/>
    <footer class="text-white pt-5 pb-4">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <p>
                        © 2022 NEXT Corp. All rights reserved.
                    </p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3"></div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3"></div>
            </div>
        </div>
    </footer>
    
    <script>

        /* function checkingWindow(){
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
        } */

        $(window).scroll(function(){
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
        });

        /* window.onload = checkingWindow;
        setInterval(checkingWindow, 500); */
    </script>
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
</body>
</html>