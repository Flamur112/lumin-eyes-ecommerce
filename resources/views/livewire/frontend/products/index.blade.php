<div>
    <div class="row">
        @forelse ($products as $productItem)
        <div class="col-md-3">
            <div class="product-card">
                <div class="product-card-img">
                    @if ( $productItem->quantity > 0)
                    <label class="stock bg-success">In Stock</label>
                    @else
                    <label class="stock bg-danger">Out of Stock</label>
                    @endif

                    @if ($productItem->productImages->count() > 0)
                    <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                        <img src="{{ asset($productItem->productImages[0]->image) }}" alt="{{  $productItem->name}}"> {{-- Path X:\xampp\htdocs\WORKS\e-commerce-website\app\Models\Product.php --}}
                    </a>
                        @endif
                </div>
                <div class="product-card-body">
                    <p class="product-brand">{{ $productItem->brand }}</p>
                    <h5 class="product-name">
                       <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                            {{$productItem->name}}
                       </a>
                    </h5>
                    <div>
                        <span class="selling-price">{{ $productItem->selling_price }}</span>
                        <span class="original-price">{{ $productItem->original_price }}</span>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-md-12">
            <div class="p-2">
                <h4>No Products Available for {{ $category->name }}</h4>
            </div>
        </div>
        @endforelse
    </div>
</div>
