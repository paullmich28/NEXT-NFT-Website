<div class="container d-flex">
    <div class="m-3 bgInput">
        <form>
            <input type="number" placeholder="Search by ID" class="form-control" wire:model="searchTerm">
        </form>
    </div>
    <div class="container text-center m-3">
        <div class="row">
        @forelse($products as $product)
            <div class="col-4">
                <p class="text-white fs-4">{{$product->name}}#{{$product->id}}</p> 
            </div>
        @empty
        <p class="text-white fs-4">Empty</p>
        @endforelse
        </div>
    </div>
</div>
