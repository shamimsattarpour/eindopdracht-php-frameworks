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
