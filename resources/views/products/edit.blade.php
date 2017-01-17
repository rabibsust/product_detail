@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-sm-10">
                                <h1>Edit: {{$product->name}}</h1>
                            </div>
                            <div class="col-sm-2">
                                <h1><a href="{{url('home')}}" class="btn btn-primary">Go Back</a></h1>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-offset-1 col-xs-9">
                                <div class="modal-wrapper">
                                    {!! Form::model($product,['method' => 'PATCH','route'=>['products.update',$product->id],'files' => true]) !!}
                                    <div class="form-group">
                                        {!! Form::label('Name', 'Name:') !!}
                                        {!! Form::text('name',null,['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('Price', 'Price:') !!}
                                        {!! Form::text('price',null,['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('Description', 'Description:') !!}
                                        {!! Form::text('description',null,['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('Image', 'Image:') !!}
                                        {!! Form::file('image',['class'=>'form-control']) !!}
                                        {{$product->image}}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('Quantity', 'Quantity:') !!}
                                        {!! Form::number('quantity',null,['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
                                    </div>
                                    {!! Form::close() !!}
                                    <br/><br/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
