@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                    <div class="row">
                        @foreach ($products as $items)
                            <div class="col-sm-3">
                                <img src="{{asset('images/'. $items->image)}}" height="150" width="150" class="img-responsive"><br/>
                                {{ $items->name }}<br/>
                                {{ $items->price }}<br/>
                                {{ $items->quantity }}<br/>
                                <a href="{{url('products',$items->id)}}" class="btn btn-primary">View</a>
                            </div> <!-- end col-md-3 -->
                        @endforeach
                    </div> <!-- end row -->
            </div>
        </div>
    </div>
@endsection