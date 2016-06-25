@extends('layouts.admin.admin')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                    <div class="title_left">
                    <h3>Products</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Edit product</h2>
                            <div class="clearfix"></div>
                        </div>
                        @if(Session::has('success'))
                            <div class="alert alert-success"><em> {!! session('success') !!}</em></div>
                        @endif
                        <span class="text-info col-md-offset-2">
                            @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                        </span>
                        <div class="x_content">
                            <br/>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                {{ Form::open(
                                        array(
                                            'name'   => 'insert_product',
                                            'id'     => 'insert_product',
                                            'class'  => "form-horizontal form-label-left",
                                            'url'    => 'product/update', 
                                            'files'  => true
                                        )
                                    )
                                }}
                                    {{ Form::hidden('id', (isset($product)) ? $product->id : '') }}
                                    <div class="form-group">
                                        {{ Form::label('category_name', 'Category name:', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                            {{ Form::select('category_id', $category, (isset($product)) ? $product->category_id : '' ,['class' => 'form-control col-md-8 col-xs-12']) }}
                                        
                                            <label class="col-md-8 text-danger">
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('product_name', 'Product name:', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}

                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                            {{ Form::text(
                                                'product_name', 
                                                (isset($product)) ? $product->product_name : '',
                                                array('class' => 'form-control col-md-8 col-xs-12', 'placeholder' => 'Product')
                                                ) 
                                            }}
                                            <label class="col-md-8 text-danger">
                                            
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('description', 'Description:', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}

                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                            {{ Form::text(
                                                'description', 
                                                (isset($product)) ? $product->description : '',
                                                array('class' => 'form-control col-md-8 col-xs-12', 'placeholder' => 'Description')
                                                ) 
                                            }}                                            
                                            <label class="col-md-8 text-danger">
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('price', 'Price:', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}

                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                            {{ Form::text(
                                                'price', 
                                                (isset($product)) ? $product->price : '',
                                                array('class' => 'form-control col-md-8 col-xs-12', 'placeholder' => 'Price')
                                                ) 
                                            }}
                                            <label class="col-md-8 text-danger">
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('image', 'Product image:', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}

                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                             {{ Form::file('image', ['class' => 'form-control']) }}
                                            <label class="col-md-8 text-danger">
                                            
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('Status', 'Status:', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                {{ Form::radio('visible', '1', (isset($product) ? ($product->status == 1 ? true : false) : true)) }} Visible
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                {{ Form::radio('visible', '0', (isset($product)&& $product->status == 0 ? true : false )) }} Not visible
                                            </label>
                                            <label class="col-md-8 text-danger">
                                                @foreach ($errors->get('visible') as $error)
                                                    {{ $error }}
                                                @endforeach
                                            </label>
                                        </div>
                                        
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                {{ Form::close() }}
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <img src="{{ (isset($product) ? url('images/products').'/'.$product->image : url('images/products/default.jpg')) }}" height="220" width="220">
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <button class="btn btn-primary " onclick="window.location='{{ url('admin/products') }}'"><i class="fa fa-backward">  Back</i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
@endsection