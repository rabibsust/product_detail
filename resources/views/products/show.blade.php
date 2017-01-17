@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>{{ $product->name }}</h1>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('images/'.$product->image)}}" height="240" class="img-rounded">
                    </div>
                    <div class="col-md-6">
                        <b>Name:</b> {{$product->name}}<br/>
                        <b>Description:</b><br/>{!! $product->description !!}<br/>
                        <b>Price:</b>{{$product->price}}<br/>
                        <b>Quantity:</b>{{$product->quantity}}<br/>
                    </div>
                    <div class="col-md-4"><a href="{{url('/')}}" class="btn btn-primary">Go Back</a> </div>
                </div>
            </div>
        </div>
    </div>
@endsection