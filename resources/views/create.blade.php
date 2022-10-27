@extends('layout')
@section('title', 'craete products')

@section('content')   
    <h1>Create a product</h1>
<div class="flex justify-center">
    <form action="{{route('products.store')}}" method="post">
        @csrf
<div>
    <label for="product-name">product Name</label>
    <input id="product-name" name="product-name" type="text">
    @error('product-name')
        <div class="form-error">
        {{$message}}
        </div>
    @enderror
</div>
<div>
    <label for="product-description">product description</label>
    <input id="product-description" name="product-description"  type="text">
    @error('product-description')
        <div class="form-error">
        {{$message}}
        </div>
    @enderror
</div>
<div>
    <label for="product-price">product Price</label>
    <input id="product-price" name="product-price" type="text">
    @error('product-price')
        <div class="form-error">
        {{$message}}
        </div>
    @enderror
</div>
<div>
    <button type="submit">Submit</button>
</div>
</form>
</div>





@endsection