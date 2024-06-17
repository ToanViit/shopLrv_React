@extends('layout.layout')

@section("cssLink") 
<link rel="stylesheet" href="{{ asset('css/productDetails.css') }}">
@endsection

@section("content") 
<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 product-image-section">
                <img src="./imgs/adrian2.jpg" alt="Product Image">
            </div>
            <div class="col-md-6 product-info-section">
                <h1 class="product-title1">SMILE MORE WORRY LESS</h1>
                <div class="product-price">473.000 VND</div>
                <div class="product-unit-price">13€/unit (Buying 3 t-shirts or +)</div>
                <div class="product-color">
                    <span>Color</span>
                    <br>
                    <div class="product-swatch" style="background-color: #FFF;"></div>
                    <div class="product-swatch" style="background-color: #002E1B;"></div>
                </div>
                <div class="product-size">
                    <span>Size</span>
                    <br>
                    <div class="product-option">XS</div>
                    <div class="product-option">S</div>
                    <div class="product-option">M</div>
                    <div class="product-option">L</div>
                    <div class="product-option">XL</div>
                    <div class="product-option">XXL</div>
                </div>
                <a class="product-size-chart"> Size char</a>
                <a href="#" class="btn mt-3 product-btn-black">Add to cart</a>
                <div class="product-certificates mt-3">
                    <!-- SVG icons here -->
                </div>
            </div>
        </div>

        <h2 class="product-title2 mt-5">Similar Products</h2>
        <div class="row">
            <div class="col-md-3 product-item">
                <img src="./imgs/shoes1 (1).jpg" alt="Product Image">
                <img src="./imgs/shoes1 (3).jpg" alt="Hover Image" class="product-hover-image">
                <div class="product-info">
                    <h5>Product Name</h5>
                    <p>Price: $49.99</p>
                </div>
            </div>
            <div class="col-md-3 product-item">
                <img src="./imgs/shoes1 (2).jpg" alt="Product Image">
                <img src="./imgs/shoes1 (4).jpg" alt="Hover Image" class="product-hover-image">
                <div class="product-info">
                    <h5>Product Name</h5>
                    <p>Price: $49.99</p>
                </div>
            </div>
            <div class="col-md-3 product-item">
                <img src="./imgs/shoes1 (3).jpg" alt="Product Image">
                <img src="./imgs/shoes1 (1).jpg" alt="Hover Image" class="product-hover-image">
                <div class="product-info">
                    <h5>Product Name</h5>
                    <p>Price: $49.99</p>
                </div>
            </div>
            <div class="col-md-3 product-item">
                <img src="./imgs/shoes1 (4).jpg" alt="Product Image">
               
                <div class="product-info">
                    <h5>Product Name</h5>
                    <p>Price: $49.99</p>
                </div>
            </div>
        </div>
    </div>
</section>  
@endsection
