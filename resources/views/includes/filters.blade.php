<div class="mb-4">

    <h4>Filter by type:</h4>

    <a href="{{ route('lights.index') }}"
       class="btn {{ request()->segment(1) != 'type' ? 'btn-dark' : 'btn-outline-dark' }} me-2 mb-2">

        All

    </a>

    @foreach($types as $type)

        <a href="{{ route('lights.type', $type->id) }}"
           class="btn {{ request()->segment(2) == $type->id ? 'btn-dark' : 'btn-outline-dark' }} me-2 mb-2">

            {{ $type->name }}

        </a>

    @endforeach

</div>