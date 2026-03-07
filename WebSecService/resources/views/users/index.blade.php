@extends('layouts.master')
@section('title', 'Users List')
@section('content')
<h3>Users List</h3>
<a href="{{ route('users_edit') }}" class="btn btn-success mb-2">Add New User</a>

<form method="get">
    <input type="text" name="name" placeholder="Name" value="{{ request()->name }}">
    <input type="text" name="email" placeholder="Email" value="{{ request()->email }}">
    <button type="submit" class="btn btn-primary btn-sm">Filter</button>
</form>

<table class="table table-striped mt-2">
    <tr><th>Name</th><th>Email</th><th>Actions</th></tr>
    @foreach($users as $user)
    <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
            <a href="{{ route('users_edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <a href="{{ route('users_delete', $user->id) }}" class="btn btn-sm btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection