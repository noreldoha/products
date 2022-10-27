@extends('layout')
@section('title', 'show products')

@section('content')

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8">
    <h1>productS</h1>
    </div>
    <div class="mt-8">
       <h3>{{$product['name']}} is from :
        <strong>{{$product['description']}} </strong> Price:
        <i>{{$product['price']}} $</i>




        </h3>
    </div>
<a class="edit-btn" href="{{route('products.edit', $product->id)}}">edit</a>
<form action="{{route('products.destroy', $product->id)}}" method="post">
    @csrf
    @method('DELETE')
<input class="delete-btn" type="submit" value="delete">
</form>

    </div>

@endsection