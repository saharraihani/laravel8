@extends('admin.layouts.master')

@section('page')
    View Orders
@endsection

@section('content')
<div class="row">

<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Orders</h4>
            <p class="category">List of all orders</p>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Address</th>
                    <th>Status</th>
                    
                </tr>
                </thead>
                <tbody>
                    
                        @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->user->name }}</td>
                            <td>
                                @foreach($order->products as $item)
                                    {{ $item->name }}
                                @endforeach
                            </td>
                            <td></td>
                            <td>{{ $order->address }}</td>
                            <td>
                                @if($order->status)
                                    <span class="label label-success">Confirmed</span>
                                @else
                                    <span class="label label-warning">Pending</span>
                                @endif
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