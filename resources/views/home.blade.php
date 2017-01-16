@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>
                <div class="panel-body">
                    <div class="row">
                        @include('products._create')
                        <a href="#" data-toggle="modal" data-target="#Create" class="btn btn-success">Create Product</a>
                        <table class="table table-striped table-bordered table-hover table-responsive">
                            <thead>
                            <tr class="bg-primary">
                                <th>Id</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Quantity</th>
                                <th>Thumbs</th>
                                <th colspan="3">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td><img src="{{asset('images/'.$product->image)}}" height="35" width="50"></td>
                                    <td><a href="{{url('products',$product->id)}}" class="btn btn-primary">View</a></td>
                                    <td><a href="{{route('products.edit',$product->id)}}" class="btn btn-warning">Update</a></td>
                                    <td>
                                        {!! Form::open(['method' => 'DELETE', 'route'=>['products.destroy', $product->id]]) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
