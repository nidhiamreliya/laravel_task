@extends('layouts.admin.admin')

@section('content')
    <div class="main_container">
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="clearfix"></div>
            <div class="page-title">
                <div class="title_left">
                    <h3>Category</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Add new Category</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            @if(Session::has('success'))
                                <div class="alert alert-success"><em> {!! session('success') !!}</em></div>
                            @endif
                            @include('commons/errors')
                            <br>
                            <br>
                            {{ Form::open([
                                        'name' => 'edit_category',
                                        'id' => 'edit_category',
                                        'method' => 'POST', 
                                        'url' => 'admin/category/'.$category->id, 
                                        'class' => "form-horizontal form-label-left"
                                    ])
                            }}
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                {{ Form::hidden('id', (isset($category)) ? $category->id : '') }}
                                <div class="form-group">
                                    {{ Form::label('category_name', 'Category name:', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        {{ Form::text(
                                                'category_name', 
                                                (isset($category)) ? $category->category_name : '',
                                                ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Category']
                                                )
                                        }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {{ Form::label('staus', 'Status:', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
                                    <div class="col-md-8 col-sm-8 col-xs-12 radio_group" >
                                        <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                            {{ Form::radio('status', '1', (isset($category) ? ($category->status == 1 ? true : false) : true)) }} Visible
                                        </label>
                                        <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                            {{ Form::radio('status', '0', (isset($category) && $category->status == 0 ? true : false )) }} Not visible
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        {{ Form::submit('Submit', ['class' => 'btn btn-success']) }}
                                    </div>
                                </div>
                            {{ Form::close() }}
                        </div>
                        <button type="submit" class="btn btn-primary" onclick="window.location='{{ url('admin/category') }}'"><i class="fa fa-backward">  Back</i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection