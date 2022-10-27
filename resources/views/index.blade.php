@extends('layout')

@section('title', 'products')

@section('content')

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center">
    <h1>Products</h1>
    </div>




    <div>
        @if(count($products) > 0)
        <ul>
        @foreach($products as $product)
        <a href="{{route('products.show', ['product'=>$product['id']])}}">
        <li> 
            {{$product['name']}} is from <strong>{{$product['description']}} - {{$product['price']}}</strong>

        </li>
        </a>
        @endforeach
    </ul>
    @else
    <p>There is any products to display</p>
    
    @endif
    </div>

    </div>

@endsection