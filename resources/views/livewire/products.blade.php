<div class="container triggerBgPrd">
    <div class="m-3 bgInput">
        <form>
            <input type="number" placeholder="Search by ID" class="form-control bg-dark border-dark text-white" wire:model="searchTerm">
        </form>
    </div>
    <div class="container text-center m-3">
        <div class="row">
        @forelse($products as $product)
            <div class="col-4 mt-5" data-aos="zoom-in" data-aos-duration="600">
                <a href="{{$product->link}}" class="productWCaption">
                    <img src="/images/products/{{$product->img}}" class="rounded products mt-3" />
                    <p class="text-white fs-4 productCaptionTemp"></p> 
                    <p class="text-white fs-4 productCaption">{{$product->name}} #{{$product->id}}</p> 
                </a>
            </div>
        @empty
        <p class="text-white fs-4">The product that you're looking for isn't here...</p>
        @endforelse
        </div>
    </div>
</div>
