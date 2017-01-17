<div class="panel panel-default">
    <div class="panel-heading">
        <h1>Products</h1>
    </div>
    <br/>
    <div class="pull-right">
        <div class="form-group">
            <div class="input-group">
                <input class="form-control" id="search" value="{{ Session::get('product_search') }}"
                       onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('list')}}?ok=1&search='+this.value)"
                       placeholder="Search..."
                       type="text">

                <div class="input-group-btn">
                    <button type="button" class="btn btn-default"
                            onclick="ajaxLoad('{{url('list')}}?ok=1&search='+$('#search').val())"><i
                                class="glyphicon glyphicon-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="panel-body">
        <div class="row">
            <table class="table table-bordered table-striped table-hover table-responsive">
                <thead>
                <tr class="bg-primary">
                    <th>Product Image</th>
                    <th>
                        <a href="javascript:ajaxLoad('list?field=name&sort={{Session::get("product_sort")=="asc"?"desc":"asc"}}')" style="color: #ffffff">
                            Name
                        </a>
                        <i style="font-size: 12px"
                           class="glyphicon  {{ Session::get('product_field')=='name'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                        </i>
                    </th>
                    <th>
                        <a href="javascript:ajaxLoad('list?field=price&sort={{Session::get("product_sort")=="asc"?"desc":"asc"}}')" style="color: #ffffff">
                            Price
                        </a>
                        <i style="font-size: 12px"
                           class="glyphicon  {{ Session::get('product_field')=='price'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                        </i>
                    </th>
                    <th>
                        <a href="javascript:ajaxLoad('list?field=quantity&sort={{Session::get("product_sort")=="asc"?"desc":"asc"}}')" style="color: #ffffff">
                            Quantity
                        </a>
                        <i style="font-size: 12px"
                           class="glyphicon  {{ Session::get('product_field')=='quantity'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
                        </i>
                    </th>
                    <th colspan="1">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td><img src="{{asset('images/'.$product->image)}}" class="img-responsive" height="30" width="60"></td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td><a href="{{url('products',$product->id)}}" class="btn btn-primary btn-xs">View</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="pull-right">{{ $products->links() }}</div>
        </div>
    </div>
</div>
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>
