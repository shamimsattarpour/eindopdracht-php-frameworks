@extends('layout')

@section('content')

<h2>All Lights</h2>

<!-- Filters -->
<div>
    <h3>Filter by type:</h3>
    @foreach ($types as $type)
        <a href="{{ route('lights.filter', $type->id) }}">
            {{ $type->name }}
        </a>
    @endforeach

    <a href="{{ route('lights.index') }}">All</a>
</div>

<hr>

<!-- Lights list -->
<div>
    @foreach ($lights as $light)
        <div style="margin-bottom:20px;">
            <h3>{{ $light->name }}</h3>
            <p>{{ $light->price }} €</p>

            <a href="{{ route('lights.detail', $light->id) }}">
                View Details
            </a>
        </div>
    @endforeach
</div>

@endsection