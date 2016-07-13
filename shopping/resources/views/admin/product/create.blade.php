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
                            <h2>Add new product</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            @if(Session::has('success'))
                                <div class="alert alert-success"><em> {!! session('success') !!}</em></div>
                            @endif
                            @include('commons/errors')
                            <br/>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                {{ Form::open(
                                        [
                                            'id' => 'insert_product',
                                            'url' => 'admin/product',
                                            'method' => 'POST', 
                                            'class'  => "form-horizontal form-label-left",
                                            'files'  => true
                                        ]
                                    )
                                }}
                                    <div class="form-group">
                                        {{ Form::label(
                                            'category_name', 
                                            'Category name:', 
                                            [   'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                                            ]) 
                                        }}
                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                            {{ Form::select(
                                                'category_id', 
                                                ['' => 'Please select a category'] + $category, 
                                                null, 
                                                [   'class' => 'form-control col-md-8 col-xs-12'
                                                ]) 
                                            }}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label(
                                            'product_name', 
                                            'Product name:', 
                                            [   'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                                            ]) 
                                        }}

                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                            {{ Form::text(
                                                'product_name', 
                                                old('product_name') ,
                                                ['class' => 'form-control col-md-8 col-xs-12', 'placeholder' => 'Product']
                                                ) 
                                            }}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label(
                                            'description', 
                                            'Description:', 
                                            [   'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                                            ]) 
                                        }}

                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                            {{ Form::textarea(
                                                'description', 
                                                old('description'),
                                                [   'class' => 'form-control col-md-8 col-xs-12', 'placeholder' => 'Description', 'rows' => 3
                                                ]) 
                                            }}                                            
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label(
                                            'price', 
                                            'Price:', 
                                            [   'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                                            ]) 
                                        }}
                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                            {{ Form::text(
                                                'price', 
                                                old('price'),
                                                [   'class' => 'form-control col-md-8 col-xs-12', 'placeholder' => 'Price'
                                                ]) 
                                            }}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label(
                                            'image', 
                                            'Product image:', 
                                            [   'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                                            ]) 
                                        }}
                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                            {{ Form::file(
                                                'image', 
                                                [   'class' => 'form-control'
                                                ]) 
                                            }}
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        {{ Form::label(
                                            'Status', 
                                            'Status:', 
                                            [   'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                                            ]) 
                                        }}
                                        <div class="col-md-8 col-sm-8 col-xs-12 radio_group">
                                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                {{ Form::radio('status', '1') }} Visible
                                            </label>
                                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                {{ Form::radio('status', '0') }} Not visible
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
                                <img src="{{ url('images/default.jpg') }}" height="220" width="220">
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <button class="btn btn-primary " onclick="window.location='{{ url('admin/product') }}'"><i class="fa fa-backward">  Back</i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
@endsection