
@extends('layout')
@section('title', 'Search for products')

@section('content')   
    <h1>Search a product</h1>
<div class="flex justify-center">
    
    <form>
        <input type="text" placeholder="search.." name="search">
        <button type="submit">search</button>
    </form>


    <h4>The searched items are:</h4>

    @if(isset($_GET['search']))

    @foreach($search_products as $product)

    <ul>
        <li>Name: {{$product->name}}</li>
        <li>Description:{{$product->description}} </li>
        <li>Price: {{$product->price}}</li>
    </ul>



    @endforeach



    @endif
 
    </div>





@endsection