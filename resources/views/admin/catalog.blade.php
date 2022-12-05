@include('extends.header')
@livewireStyles
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
                    <a class="nav-link" aria-current="page" href="{{route('admin_home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('admin_catalog')}}">NEXT-NFT STORE</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        About
                    </a>
                    <ul class="dropdown-menu about">
                        <li><a class="dropdown-item" href="#">FAQ</a></li>
                        <li><a href="{{route('collab_admin')}}" class="dropdown-item">Be a Collaborator</a></li>
                    </ul>
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
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{Auth::guard('web')->user()->name}}
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{route('profile.edit')}}">Profile Detail</a>
                        </li>
                        <li>
                            <a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item">Logout</a>
                            <form action="{{route('logout')}}" id="logout-form" method="POST">
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
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class='bx bx-plus' >Add Product</i>
        
    </button>
    @if(Session::has('status'))
        <div class="alert alert-success w-25 mt-2">{{Session::get('status')}}</div>
    @endif
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Product</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('add_product')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <label for="productimg" class="form-label">Upload Photo</label>
                    <input type="file" name="productimg" class="form-control"/>
                    <span class="text-danger fs-5">@error('productimg') {{$message}} @enderror</span><br />
                    <label for="productName" class="form-label mt-3">Product Name</label>
                    <input type="text" name="productName" class="form-control"/>
                    <span class="text-danger fs-5">@error('productName') {{$message}} @enderror</span><br />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container mt-2">
    <h2 class="text-warning">NEXT-NFT STORE</h2>
</div>

@livewire('products-admin')   
@livewireScripts 
@include('extends.footer')