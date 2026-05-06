@extends('layout')

@section('content')

<h2 class="mb-4">All Lights</h2>

<div class="mb-4">
    <h4>Filter by type:</h4>

    <a href="{{ route('lights.index') }}" class="btn btn-dark me-2 mb-2">
        All
    </a>

    @foreach($types as $type)
        <a href="{{ route('lights.type', $type->id) }}"
           class="btn btn-outline-dark me-2 mb-2">
            {{ $type->name }}
        </a>
    @endforeach
</div>

<div class="row">

    @foreach($lights as $light)

        <div class="col-md-4 mb-4">

            <div class="card h-100 shadow-sm">

                <img src="https://placehold.co/600x400"
                     class="card-img-top"
                     alt="lamp">

                <div class="card-body">

                    <h5 class="card-title">
                        {{ $light->name }}
                    </h5>

                    <p class="card-text">
                        € {{ $light->price }}
                    </p>

                    <a href="{{ route('lights.detail', $light->id) }}"
                       class="btn btn-dark">
                        View Details
                    </a>

                </div>

            </div>

        </div>

    @endforeach

</div>

@endsection