<div class="row">
    <div class="col-md-12">

        @if (session('message'))
            <div class="atert atert-success">{{ session('message') }}</div>
        @endif

        <div class="card">

            <div class="card-header">
                <h4>
                    Category
                    <a href="{{ url('admin/category/create') }}" class="btn btn-primary btn-sm float-end">Add Category</a>
                </h4>
            </div>
            <div class="card-body">
                <table class="table table-border table-striped">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($categories as $category)

                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->status == '1' ? 'Hidden':'Visable' }}</td>
                            <td>
                                <a href="" class="btn btn-success">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>

                <div>
                    {{ $categories->links() }}
                </div>

            </div>

        </div>
    </div>

</div>
