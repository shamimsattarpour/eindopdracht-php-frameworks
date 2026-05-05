@extends('layout')

@section('content')

<h2>{{ $light->name }}</h2>

<p>{{ $light->description }}</p>
<p>Price: {{ $light->price }} €</p>

<hr>

<h3>Related lights</h3>

@foreach ($relatedLights as $item)
    <div>
        <p>{{ $item->name }}</p>
        <a href="{{ route('lights.detail', $item->id) }}">View</a>
    </div>
@endforeach

@endsection