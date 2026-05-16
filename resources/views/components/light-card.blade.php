<div class="col-md-4 mb-4">

    <div class="card h-100 shadow-sm">

        <img
            src="{{ asset('images/' . $light->image) }}"
            class="card-img-top"
            alt="{{ $light->name }}"
        >

        <div class="card-body">

            <h5 class="card-title">
                {{ $light->name }}
            </h5>

            <p class="card-text">
@currency($light->price)            </p>

            <a href="{{ route('lights.detail', $light->id) }}"
               class="btn btn-dark">
                View Details
            </a>

            <a href="{{ route('lights.edit', $light->id) }}"
               class="btn btn-dark">
                Edit
            </a>

            <form action="{{ route('lights.destroy', $light->id) }}"
                  method="POST"
                  class="mt-2">

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">
                    Delete
                </button>

            </form>

        </div>

    </div>

</div>