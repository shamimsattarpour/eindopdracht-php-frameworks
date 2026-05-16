@extends('layout')

@section('content')

<div class="container">

    <h1>Create Light</h1>

    <form method="POST" action="{{ route('lights.store') }}">

        @csrf

        <div class="mb-3">

            <label>Name</label>

            <input
                type="text"
                name="name"
                class="form-control"
                value="{{ old('name') }}"
            >

            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror

        </div>

        <div class="mb-3">

            <label>Description</label>

            <textarea
                name="description"
                class="form-control"
            >{{ old('description') }}</textarea>

            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror

        </div>

        <div class="mb-3">

            <label>Price</label>

            <input
                type="number"
                step="0.01"
                name="price"
                class="form-control"
                value="{{ old('price') }}"
            >

            @error('price')
                <div class="text-danger">{{ $message }}</div>
            @enderror

        </div>

        <div class="mb-3">

            <label>Image URL</label>

            <input
                type="text"
                name="image"
                class="form-control"
                value="{{ old('image') }}"
            >

            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror

        </div>

        <div class="mb-3">

            <label>Type</label>

            <select name="type_id" class="form-control">

                @foreach($types as $type)

                    <option value="{{ $type->id }}">
                        {{ $type->name }}
                    </option>

                @endforeach

            </select>

            @error('type_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror

        </div>

        <button type="submit" class="btn btn-primary">
            Create
        </button>

    </form>

</div>

@endsection