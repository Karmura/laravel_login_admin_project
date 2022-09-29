@extends('layout')

@section('content')

<div class="row justify-content-between">

    @if (session('success'))
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <h4 class="alert-heading">!Success!</h4>
            <p class="mb-0">{{ session('success') }}</p>
        </div>
    @endif

    <div class="col-md-5">
        <h3>Add a Product</h3>

        <form action="/add-product" method="POST" enctype="multipart/form-data" class="form">
            @csrf

            <div class="form-group">
                <label for="title" class="mt-4">Product Title:</label>
                <input type="text" name="title" id="title" class="form-control @error('title')
                    is-invalid
                @enderror" placeholder="Enter Product Title" />

                <span>
                    @error('title')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="form-group">
                <label for="price" class="mt-4">Product Price:</label>
                <input type="number" step="any" min="1" name="price" id="price" class="form-control @error('price')
                    is-invalid
                @enderror" placeholder="Enter Product Price" />

                <span>
                    @error('price')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="form-group">
                <label for="files" class="form-label mt-4">Upload Product Images:</label>
                <input type="file" name="images[]" id="image" class="form-control" accept="image/*" multiple />
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Save Product</button>
            </div>

        </form>

    </div>

    <div class="col-md-6">
        <h3>Products</h3>

        <table class="table table-striped">

            <thead>

                <tr>

                    <th>#</th>
                    <th>Product Title</th>
                    <th>Price</th>
                    <th>Totlal Images</th>
                    <th>View Images</th>

                </tr>

            </thead>

            <tbody>

                @php $i=1; @endphp{{--  For Serial Number in Table --}}
                @forelse ($products as $product)

                <tr>

                    <td>{{ $i++; }}</td>
                    <td>{{ $product->title }}</td>
                    <td>$ {{ $product->price }}</td>
                    <td>{{ $product->images->count() }}</td>
                    <td>
                        <a href={{ url('product-images/'.$product->id) }} class="btn btn-outline-dark">View</a>
                    </td>

                </tr>

                @empty
                    <tr>
                        <td colspan="5" class="text-center">No product yet</td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection
