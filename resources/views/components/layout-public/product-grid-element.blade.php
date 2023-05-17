@props(['product'])

@php
$price = number_format($product->price, 2, ',', '.');
[$whole, $decimal] = explode(',', $price);
@endphp
<style>
    .col {
        transition: transform 0.2s ease-in-out;
    }
    
    .col:hover {
        transform: scale(1.1);
        background-color: red;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    
    .product-grid {
        display: grid;
        grid-template-columns: repeat(1, 2 fr);
        grid-gap: 30px;
        margin-top: 20px;
    }
    </style>
    
    <div class="product-grid">
        <div class="col" id="product-item-1">
            <div class="card shadow-sm h-100">
                <img class="card-img-top" src="{{ $product->picture }}">
    
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <div class="d-flex justify-content-between align-items-center mt-auto flex-wrap-reverse">
    
                        <form action="{{ route('product-add-to-cart', ['id' => $product->id]) }}" method="post">
                            @csrf
                            <div class="btn-group">
                                <a href="{{ route('show-product', ['slug' => $product->slug]) }}"
                                    class="btn btn-lg btn-outline-primary">Affichage</a>
                                @auth
                                    <button type="submit" class="btn btn-lg btn-primary"><i class="bi bi-cart-plus"></i></button>
                                @endauth
                            </div>
                        </form>
    
                        <div class="d-flex align-items-start">
                            <span class="fs-2">{{ $whole }}</span>
                            <span class="fs-6">{{ $decimal }}</span> MAD
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add more product elements here -->
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(function() {
        $('.col').click(function() {
            $(this).toggleClass('enlarge');
        });
    });
    </script>
    