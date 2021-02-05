@extends('layout')

@section('header')
Add series
@endsection

@section('content')
<form method="post">
    @csrf
    <div class="form-group mb-3">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <button class="btn btn-primary">Add</button>
</form>
@endsection
