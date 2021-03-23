@extends('admin.layouts.master')

@section('page')
    View Products
@endsection

@section('content')
<div class="row">

<div class="col-md-12">
    @include('admin.layouts.message')
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
                    <th>Description</th>
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
                            <td>
                                <form method="POST" action="{{ route('products.destroy', $product->id) }}">
                                    @csrf
                                    
                                    <button type="submit" class="btn btn-danger btn-sm">
                                    @method("DELETE")
                                        <span class="ti-trash"></span>
                                    </button>
                                </form>
                                <form method="GET" action="{{ route('products.edit', $product->id) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-info btn-sm">
                                        <span class="ti-pencil"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
</div>
@endsection