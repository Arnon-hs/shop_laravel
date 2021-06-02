@extends('layouts.app')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('catalog')}}">Каталог</a> -> <a href="{{route('category', $product->category()->id)}}">{{$product->category()->title}}</a> -> {{$product->title}}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-4 col-12">
                            <img src="{{$product->image}}" alt="{{$product->title}}" style="max-width: 100%; max-height: fit-content">
                            @include('contact')
                        </div>
                        <div class="col-xl-8 col-12 border-1 border-dark text-center">
                            <h3 class="mt-auto">{{$product->title}}</h3>
                            <h6>Артикул: {{$product->article}}</h6>
                            <h4 class="m-1">Цена: {{$product->price}} руб. за рулон</h4>
                            <p>Размер: <br>Высота - {{$product->length}} м<br>Ширина - {{$product->width}} м</p>
                            <p>Описание: {{$product->description}}</p>
                            <span>Магазин: {{$product->store()->title}}</span>
                            @include('calculator')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
