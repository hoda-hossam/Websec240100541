@extends('layouts.master')
@section('title', 'Multiplication Table')
@section('content')
<div class="card m-4 col-sm-4">
    <div class="card-header">
        Enter Number
    </div>
    <div class="card-body">
        <form method="GET" action="/multable">
            <div class="mb-3">
                <input type="number" name="number" class="form-control" placeholder="Enter a number" required>
            </div>
            <button type="submit" class="btn btn-primary">
                Show Table
            </button>
        </form>
        <hr>
        @if($j)
            <h5>{{$j}} Multiplication Table</h5>
            <table class="table table-bordered">
                @foreach (range(1,10) as $i)
                    <tr>
                        <td>{{$i}} × {{$j}}</td>
                        <td>= {{$i * $j}}</td>
                    </tr>
                @endforeach
            </table>
        @endif
    </div>
</div>
@endsection