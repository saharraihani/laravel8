@extends('admin.layouts.master')

@section('page')
    View Products
@endsection

@section('content')
<div class="row">

<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">All Products</h4>
            <p class="category">List of all stock</p>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Desc</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
</div>
@endsection