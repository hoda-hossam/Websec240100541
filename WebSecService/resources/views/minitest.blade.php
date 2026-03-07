<!DOCTYPE html>
<html>
<head>
<title>Mini Test</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-sm bg-light">
<div class="container-fluid">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="./">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="./even">Even Numbers</a>
</li>
<li class="nav-item">
<a class="nav-link" href="./prime">Prime Numbers</a>
</li>
<li class="nav-item">
<a class="nav-link" href="./multable">Multiplication Table</a>
</li>
<li class="nav-item">
<a class="nav-link" href="./minitest">Mini Test</a>
</li>
</ul>
</div>
</nav>

<div class="container mt-4">

<div class="card">
<div class="card-header">
Supermarket Bill
</div>

<div class="card-body">

<table class="table table-bordered">
<tr>
<th>Product</th>
<th>Price</th>
<th>Quantity</th>
<th>Total</th>
</tr>

@php
$grandTotal = 0;
@endphp

@foreach($bill as $item)

<tr>
<td>{{$item['name']}}</td>
<td>{{$item['price']}}</td>
<td>{{$item['qty']}}</td>
<td>{{$item['price'] * $item['qty']}}</td>
</tr>

@php
$grandTotal += $item['price'] * $item['qty'];
@endphp

@endforeach

<tr class="table-success">
<td colspan="3"><b>Grand Total</b></td>
<td><b>{{$grandTotal}}</b></td>
</tr>

</table>

</div>
</div>

</div>

</body>
</html>