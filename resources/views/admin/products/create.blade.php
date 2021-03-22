@extends('admin.layouts.master')

@section('page')
    Add Product
@endsection

@section('content')
    <div class="row">
                    <div class="col-lg-10 col-md-10">
                        @include('admin.layouts.message')
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Product</h4>
                            </div>
                            <div class="content">
                                <form method="POST" action="{{ action('App\Http\Controllers\ProductController@store') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Product Name:</label>
                                                <input type="text" class="form-control border-input" name='name' placeholder="Macbook pro">
                                                <span class="text-danger"></span>
                                            </div>

                                            <div class="form-group">
                                                <label>Product Price:</label>
                                                <input type="text" class="form-control border-input" name='price' placeholder="$2500">
                                            </div>

                                            <div class="form-group">
                                                <label>Product Description:</label>
                                                <textarea name="description" id="" cols="30" rows="10"
                                                          class="form-control border-input"  placeholder="Product Description"></textarea>
                                            </div>

                                            

                                        </div>

                                    </div>
                                    <div class="">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Add Product</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
@endsection