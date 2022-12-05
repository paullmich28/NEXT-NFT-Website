@include('extends.header')
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
<section>
    <div class="container-faq text-warning">
        <h1>Frequently Asked Question</h1>
        <div class="mt-5">
            <details>
                <summary>How do I purchase NFT?</summary>
                <p>Our NFT (Non-Fungible Token) are connected to opensea. You can make an account by connecting your crypto wallet.</p> 
            </details>
            <details>
                <summary>What is a crypto wallet?</summary>
                <p>
                    Crypto wallet is a digital wallet that helps you buy,sell, and store your cryptocurreny and NFTs. Next time you try to make your own, 
                    you will get your own masterkey. It is different from other account because the one that can recover your account is you by using your masterkey. 
                    Because of that you must lock, keep and safe your masterkey either on your private notes, deposit box or anything that you to keep it safe.
                </p>
            </details>
            <details>
                <summary>How to be a collaborator?</summary>
                <p>
                    Collaborator is our system that inviting artist all over the world to join our team to develop your art to be an digital asset for your own. <br>
                    1.	Send your proposal
                    <ul>
                        Propose your own concept and art to our email. There are some requirements that artist must be done.
                        <li>Your NFTs are unique and authentic</li>
                        <li>Minimun 5 example of your own art that require</li>
                        <li>Fill your own identity (Name,Region,Age,etc.)</li>
                        <li>Add your phone number and email</li>
                        For further Information, check Be A Collaborator in the navigation bar.
                    </ul>
                </p>
                <p>
                    2.	Meet our team
                    
                    <ul>
                        After that, our team will contact you by email or other social media. Furthermore, we will meet to make our agreement with you 
                    and finally you will able to join our team.
                    </ul>
                </p>
            </details>
        </div>
        
    </div>
</section>
@include('extends.footer')