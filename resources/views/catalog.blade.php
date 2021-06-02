@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    @include('catalog-header')
                </div>
                <div class="card-body">

                    <div class="row justify-content-center align-items-center">
                        @foreach($products as $product)
                            <div class="col-xl-4 col-md-3 col-sm-2 border-1 border-dark text-center">
                                <a href="{{route('product', $product->id)}}">
                                    <img src="{{$product->image}}" alt="{{$product->title}}" style="max-width: 100%; max-height: fit-content">
                                    <h3 class="mt-auto">{{$product->title}}</h3>
                                </a>
                                <h4 class="m-1">{{$product->price}} руб.</h4>
                            </div>
                        @endforeach
                        <div class="col-12 justify-content-center d-flex">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
