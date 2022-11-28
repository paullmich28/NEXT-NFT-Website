<div class="container d-flex">
    <div class="m-3 bgInput">
        <form>
            <input type="number" placeholder="Search by ID" class="form-control bg-dark border-dark text-white" wire:model="searchTerm">
        </form>
    </div>
    <div class="container text-center m-3">
        <div class="row">
        @forelse($products as $product)
            <div class="col-4" data-aos="zoom-in" data-aos-duration="600">
                <img src="/images/products/{{$product->img}}" class="rounded products" width="275px" height="305px" />
                <p class="text-white fs-4">{{$product->name}}#{{$product->id}}</p> 
            </div>
        @empty
        <p class="text-white fs-4">Empty</p>
        @endforelse
        </div>
    </div>
</div>
