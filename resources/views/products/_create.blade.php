
<div id="Create" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="create-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="account-title">Create Products</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-offset-1 col-xs-9">
                            <div class="modal-wrapper">
                                {!! Form::open(['route' => 'products.store', 'files' => true]) !!}
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
                                    {!! Form::textarea('description',null,['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('Image', 'Image:') !!}
                                    {!! Form::file('image',['class'=>'form-control']) !!}
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