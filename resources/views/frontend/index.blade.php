@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false" data-interval="5">
    <div class="carousel-inner">
        @foreach ($sliders as $key => $sliderItem)
        <div class="carousel-item {{ $key == 0 ? 'active':'' }}">
            @if ($sliderItem->image)
            <img src="{{ asset($sliderItem->image) }}" class="d-block w-100 slider-image" alt="...">
            @endif
            <div class="carousel-caption d-none d-md-block">
                <div class="custom-carousel-content">
                    <h1>{!! $sliderItem->title !!}</h1>
                    <p>{!! $sliderItem->description !!}</p>
                    <div>
                        <a href="{{ url('/collections/ray-bans/ray-bans')}}" class="btn btn-slider btn-secondary">Get Now</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<div class="py-5 bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h4>Welcome to Lumin Eyes</h4>
                <div class="underline mx-auto"></div>
                <p>Where we believe that glasses are more than just a necessity;
                    they're a fashion statement. Our curated collection of stylish eyewear blends fashion with functionality,
                    offering the perfect pair of glasses to suit your unique style and vision needs. Whether you're looking for a bold statement piece or
                    a subtle everyday frame, Lumineyes has you covered. Shop now and see the difference with Lumineyes.</p>
            </div>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Trending Products</h4>
                <div class="underline mb-4"></div>
            </div>
            @if($trendingProducts)
            <div class="col-md-12">
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($trendingProducts->chunk(3) as $key => $chunk)
                        <div class="carousel-item {{ $key == 0 ? 'active':'' }}">
                            <div class="row">
                                @foreach ($chunk as $productItem)
                                <div class="col-md-3">
                                    <div class="product-card">
                                        <div class="product-card-img">
                                            <label class="stock bg-danger">New</label>
                                            @if ($productItem->productImages->count() > 0)
                                            <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                                <img src="{{ asset($productItem->productImages[0]->image) }}" class="img-fluid">
                                            </a>
                                            @endif
                                        </div>
                                        <div class="product-card-body">
                                            <p class="product-brand">{{ $productItem->brand }}</p>
                                            <h5 class="product-name">
                                                <a href="{{ url('/collections/'.$productItem->category->slug.'/'.$productItem->slug) }}">
                                                    {{ $productItem->name }}
                                                </a>
                                            </h5>
                                            <div>
                                                <span class="selling-price" style="font-size: larger;">${{ $productItem->selling_price }}</span>
                                                <span class="original-price text-muted" style="font-size: larger; text-decoration: line-through;">${{ $productItem->original_price }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            @else
            <div class="col-md-12">
                <div class="p-2">
                    <h4>No Product Available</h4>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

@endsection

@section('section')

<script>
    $(document).ready(function(){
        $('.trending-product').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });
    });
</script>

@endsection
