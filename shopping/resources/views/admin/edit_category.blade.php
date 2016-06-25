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
                            <br>
                            <br>
                            {{ Form::open(
                                    array(
                                        'name' => 'edit_category',
                                        'id' => 'edit_category',
                                        'url' => 'category/update', 
                                        'class' => "form-horizontal form-label-left"
                                    )
                                )
                            }}
                                {{ Form::hidden('id', (isset($category)) ? $category->id : '') }}
                                <div class="form-group">
                                    {{ Form::label('category_name', 'Category name:', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        {{ Form::text(
                                                'category_name', 
                                                (isset($category)) ? $category->category_name : '',
                                                array('class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Category')
                                                ) 
                                        }}
                                        <label class="col-md-8 text-danger">
                                            @foreach ($errors->get('category_name') as $error)
                                                {{ $error }}
                                            @endforeach
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    {{ Form::label('staus', 'Status:', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                            {{ Form::radio('visible', '1', (isset($category) ? ($category->status == 1 ? true : false) : true)) }} Visible
                                        </label>
                                        <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                            {{ Form::radio('visible', '0', (isset($category) && $category->status == 0 ? true : false )) }} Not visible
                                        </label>
                                        <label class="col-md-8 text-danger">
                                            @foreach ($errors->get('visible') as $error)
                                                {{ $error }}
                                            @endforeach
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        {{ Form::submit('Submit', array('class' => 'btn btn-success')) }}
                                    </div>
                                </div>
                            {{ Form::close() }}
                        </div>
                        <button type="submit" class="btn btn-primary" onclick="window.location='{{ url('admin/categories') }}'"><i class="fa fa-backward">  Back</i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection