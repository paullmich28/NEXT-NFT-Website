@include('extends.header')
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
                    <a class="nav-link active" aria-current="page" href="{{route('admin_home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin_catalog')}}">NEXT-NFT STORE</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        About
                    </a>
                    <ul class="dropdown-menu about">
                        <li><a class="dropdown-item" href="{{route('faq_admin')}}">FAQ</a></li>
                        <li><a href="{{route('collab_admin')}}" class="dropdown-item">Be a Collaborator</a></li>
                    </ul>
                </li>
                <li class="nav-item mx-2">
                    <a href="https://www.instagram.com/next_artc/">
                        <img src="/images/ig.jpg" alt="instagram" width="45" height="45" class="rounded-circle border border-2 border-white">
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a href="https://opensea.io/NEXT_ARTC">
                        <img src="/images/opensea.png" alt="opensea" width="45" height="45" class="rounded-circle border border-2 border-white">
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{Auth::guard('web')->user()->name}}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('profile.edit')}}">Profile Detail</a></li>
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
    <form action="/admin/catalog/edit/{{$product->id}}" enctype="multipart/form-data" method="POST">
        @method('patch')
        @csrf
        <div class="editData mx-auto mt-4 bg-warning p-4 rounded">
            <a href="{{route('admin_catalog')}}" class="text-decoration-none m-2">Go Back</a>
            @if(Session::has('status'))
                <div class="alert alert-success w-50 mt-2">{{Session::get('status')}}</div>
            @endif
            <img src="/images/products/{{$product->img}}" class="imgEdit"/>
            <label for="img" class="form-label mt-2">Product's Image</label>
            <input type="file" name="img" class="form-control">
            <label for="name" class="form-label mt-2">Product Name</label>
            <input type="text" name="name" value="{{$product->name}}" class="form-control "> 
            <label for="link" class="form-label mt-2">Opensea Link</label>
            <input type="text" name="link" value="{{$product->link}}" class="form-control">
            <button type="submit" class="btn btn-success mt-5">Save Changes</button>
            <a href="/admin/catalog/delete/{{$product->id}}" class="btn btn-danger mx-1 mt-5">Delete</a>
        </div>
    </form>
</div>
@include('extends.footer')