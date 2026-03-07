@extends('layouts.master')
@section('title', $user->id ? 'Edit User' : 'New User')
@section('content')
<h3>{{ $user->id ? 'Edit User' : 'Add New User' }}</h3>

<form action="{{ route('users_save', $user->id) }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name" value="{{ $user->name }}" required>
    <input type="email" name="email" placeholder="Email" value="{{ $user->email }}" required>
    <input type="password" name="password" placeholder="Password" {{ $user->id ? '' : 'required' }}>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection