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
                        {{$product->name}}<br/>
                        {{$product->price}}<br/>
                        {{$product->quantity}}<br/>
                        {{$product->description}}<br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection