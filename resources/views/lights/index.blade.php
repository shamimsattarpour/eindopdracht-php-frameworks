@extends('layout')

@section('content')

<h2 class="mb-4">All Lights</h2>

<a href="{{ route('lights.create') }}" class="c-add-light">
    Add Light
</a>

@include('includes.filters')
<div class="row">

    @foreach($lights as $light)

        <x-light-card :light="$light" />

    @endforeach

</div>

@endsection