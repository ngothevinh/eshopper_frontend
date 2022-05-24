@extends('layouts.master')

@section('title')
    <title>Trang chủ</title>
@endsection

@section('css')
    <link href="{{asset('home/home.css')}}" rel="stylesheet">
@endsection

@section('js')
    <link href="{{asset('home/home.js')}}" rel="stylesheet">
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">
                @include('components.sidebar')
                <div class="col-sm-9 padding-right">
                    <div class="features_items">
                        <h2 class="title text-center">Sản phẩm nổi bật</h2>
                        @foreach($products as $product)
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{config('app.base_url') . $product->feature_image_path}}" alt=""/>
                                            <h2>{{number_format($product->price)}} VNĐ</h2>
                                            <p>{{$product->name}}</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>{{number_format($product->price)}} VNĐ</h2>
                                                <p>{{$product->name}}</p>
                                                <a   href="#"
                                                     class="btn btn-default add_cart"
                                                     data-url="{{route('cart.add',['id'=>$product->id])}}">
                                                    <i class="fa fa-shopping-cart"></i>Add to cart
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{$products->links('pagination::bootstrap-4')}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<body>
</body>






