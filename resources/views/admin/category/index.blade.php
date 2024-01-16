@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Category
                    <a href="{{ url('admin/category/create') }}" class="btn btn-primary btn-sm float-end">Add Category</a>
                </h3>
            </div>
            <div class="card-body">
                <p>Debug: Content is here!</p>
            </div>
        </div>
    </div>
</div>

@endsection
