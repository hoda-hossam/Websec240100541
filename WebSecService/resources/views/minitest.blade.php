@extends('layouts.master')

@section('title', 'Mini Test')

@section('content')
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

      @php $grandTotal = 0; @endphp

      @foreach($bill as $item)
      <tr>
        <td>{{ $item['name'] }}</td>
        <td>{{ $item['price'] }}</td>
        <td>{{ $item['qty'] }}</td>
        <td>{{ $item['price'] * $item['qty'] }}</td>
      </tr>

      @php $grandTotal += $item['price'] * $item['qty']; @endphp
      @endforeach

      <tr class="table-success">
        <td colspan="3"><b>Grand Total</b></td>
        <td><b>{{ $grandTotal }}</b></td>
      </tr>
    </table>
  </div>
</div>
@endsection