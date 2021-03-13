@extends('layout')

@section('header')
Series
@endsection

@section('content')
@if (!empty($message))
<div class="alert alert-success">
    {{ $message }}
</div>
@endif

<a href="{{ route('create_series') }}" class="btn btn-dark mb-2">Add</a>
<ul class="list-group">
    @foreach ($series as $serie)
    <li class="list-group-item d-flex justify-content-between align-items-center">{{ $serie->name }}
        <form
            method="post"
            action="/series/remove/{{ $serie->id }}"
            onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes($serie->name) }}?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
        </form>
    </li>
    @endforeach
</ul>
@endsection
