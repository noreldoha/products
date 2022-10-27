<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>
<body class="antialised">

<div class="relative py-4 px-6">

<nav>
<a href="{{route('home.index')}}">Home</a>
<a href="{{route('products.index')}}">products</a>
<a href="{{route('products.create')}}">Create</a>
<a href="{{route('products.search')}}">Search</a>

</nav>

</div>


<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900">
  @yield('content')
</div>
   
</body>
</html>