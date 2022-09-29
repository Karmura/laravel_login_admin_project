@extends('layout')
@section('content')
    <h2>Images for product <span class="text-primary">{{ $product->title }}</span> </h2>
    <a href="/" class="btn btn-primary">Go Back</a>

    <div class="row mt-4">
        @if (session('success'))
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <h4 class="alert-heading">!Success!</h4>
                <p class="mb-0">{{ session('success') }}</p>
            </div>
        @endif

        <div class="cart mt-2 p-2">

            <form action="/product/add-images/{{ $product->id }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="form-group">

                    <label for="files" class="form-label mt-4">Upload More Images:</label>

                    <input type="file" name="images[]" id="image" class="form-control" accept="image/*" multiple />

                </div>

                <div class="mt-1">

                    <button type="submit" class="btn btn-dark">Add Images</button>

                </div>

            </form>

        </div>

        @foreach ($images as $image)
            <div class="col-md-3">
                <div class="card text-white-bg-secondary mb-3" style="max-width: 20rem;">
                    <div class="card-body text-center">
                        <img src="/product_images/{{ $image->image }}" class="img-fluid rounded-top card-img-top" alt="bla" />
                        <a href="/product/remove-image/{{ $image->id }}" class="btn btn-danger mt-2">Delete</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
