<!DOCTYPE html>
<html>
<head>
<title>Products</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
@include('layouts.menu')
<div class="container mt-4">
<div class="row">

@foreach($products as $product)

<div class="col-md-4">

<div class="card">

<img src="{{$product['image']}}" class="card-img-top">

<div class="card-body">

<h5>{{$product['name']}}</h5>

<p>{{$product['desc']}}</p>

<p><b>{{$product['price']}} EGP</b></p>

<button class="btn btn-primary">Add To Cart</button>

</div>
</div>

</div>

@endforeach

</div>
</div>

</body>
</html>