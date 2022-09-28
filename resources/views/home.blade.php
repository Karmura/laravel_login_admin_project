@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    @if (Auth::user()->role_as == '1')
                        <a href="{{ url('admin/dashboard/1') }}" class="btn btn-success float-end">Go To Change Items</a>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
