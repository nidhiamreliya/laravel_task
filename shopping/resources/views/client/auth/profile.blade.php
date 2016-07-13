@extends('layouts.client.client_layout')
@section('content')
<!-- reg-form -->
<div class="reg-form">
    <div class="container">
        <div class="reg">
            <h2 class="text-center head">Welcome {{ $user->first_name }} </h2>
            <hr/>
            <div class="col-md-10 col-md-offset-4 form-horizontal">
                <div id="formerrors"></div>
                <form id="edit_user">
                    <ul class="col-md-10">
                        <li class="text-info col-md-3 col-sm-3 col-xs-12">First Name: </li>
                        <li class="col-md-7 col-sm-7 col-xs-12">
                            <span class="first_name" >{{ $user->first_name }}</span>
                            {{ Form::text(
                                    'first_name', 
                                    $user->first_name,
                                    ['placeholder' => 'First name', 'id' => 'first_name']
                                    ) 
                            }}
                            <a class="edit">Edit</a>
                            <a class="save" val="first_name">Save</a>
                        </li>
                    </ul>
                    <ul class="col-md-10">
                        <li class="text-info col-md-3 col-sm-3 col-xs-12">Last Name: </li>
                        <li class="col-md-7 col-sm-7 col-xs-12">
                            <span class="last_name">{{ $user->last_name }}</span>
                            {{ Form::text(
                                    'last_name', 
                                    $user->last_name,
                                    ['placeholder' => 'Last name', 'id' => 'last_name']
                                    ) 
                            }}
                            <a class="edit">Edit</a>
                            <a class="save" val="last_name">Save</a>
                        </li>
                     </ul>               
                    <ul class="col-md-10">
                        <li class="text-info col-md-3 col-sm-3 col-xs-12">Email: </li>
                        <li class="col-md-7 col-sm-7 col-xs-12">
                            <span class="email">{{ $user->email }}</span>
                            {{ Form::text(
                                    'email', 
                                    $user->email,
                                    ['placeholder' => 'Email', 'id' => 'email']
                                    ) 
                            }}
                            <a class="edit">Edit</a>
                            <a class="save" val="email">Save</a>
                        </li>
                    </ul>
                    <ul class="col-md-10">
                        <li class="text-info col-md-3 col-sm-3 col-xs-12">Contact no.: </li>
                        <li class="col-md-7 col-sm-7 col-xs-12">
                            <span class="contact_no">{{ $user->contact_no }}</span>
                            {{ Form::text(
                                    'contact_no', 
                                    $user->contact_no,
                                    ['placeholder' => 'Contact no.', 'id' => 'contact_no']
                                    ) 
                            }}
                            <a class="edit">Edit</a>
                            <a class="save" val="contact_no">Save</a>
                        </li>
                    </ul>
                    <ul class="col-md-10">
                        <li class="text-info col-md-3 col-sm-3 col-xs-12">Address:</li>
                        <li class="col-md-7 col-sm-7 col-xs-12">
                            <span class="address">{{ $user->address }}</span>
                            {{ Form::text(
                                    'address', 
                                    $user->address,
                                    ['placeholder' => 'Address', 'id' => 'address']
                                    ) 
                            }}
                            <a class="edit">Edit</a>
                            <a class="save" val="address">Save</a>
                        </li>
                    </ul>
                    <ul class="col-md-10">
                        <li class="text-info col-md-3 col-sm-3 col-xs-12">City: </li>
                        <li class="col-md-7 col-sm-7 col-xs-12">
                            <span class="city">{{ $user->city }}</span>
                            {{ Form::text(
                                    'city', 
                                    $user->city,
                                    ['placeholder' => 'City', 'id' => 'city']
                                    ) 
                            }}
                            <a class="edit">Edit</a>
                            <a class="save" val="city">Save</a>
                        </li>
                    </ul>
                    <ul class="col-md-10">
                        <li class="text-info col-md-3 col-sm-3 col-xs-12">Zip_code: </li>
                        <li class="col-md-7 col-sm-7 col-xs-12">
                            <span class="zip_code">{{ $user->zip_code }}</span>
                            {{ Form::text(
                                    'zip_code', 
                                    $user->zip_code,
                                    ['placeholder' => 'Zip code', 'id' => 'zip_code']
                                    ) 
                            }}
                            <a class="edit">Edit</a>
                            <a class="save" val="zip_code">Save</a>
                        </li>
                    </ul>                       
                    <ul class="col-md-10">
                        <li class="text-info col-md-3 col-sm-3 col-xs-12">State: </li>
                        <li class="col-md-7 col-sm-7 col-xs-12">
                            <span class="state">{{ $user->state }}</span>
                            {{ Form::text(
                                    'state', 
                                    $user->state,
                                    ['placeholder' => 'State', 'id' => 'state']
                                    ) 
                            }}
                            <a class="edit">Edit</a>
                            <a class="save" val="state">Save</a>
                        </li>
                    </ul>
                    <ul class="col-md-10">
                        <li class="text-info col-md-3 col-sm-3 col-xs-12">Country: </li>
                        <li class="col-md-7 col-sm-7 col-xs-12">
                            <span class="country">{{ $user->country }}</span>
                            {{ Form::text(
                                    'country', 
                                    $user->country,
                                    ['placeholder' => 'Country', 'id' => 'country']
                                    ) 
                            }}
                            <a class="edit">Edit</a>
                            <a class="save" val="country">Save</a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('input[type=text]').toggle();
    $('.edit').toggle();
    $('.save').toggle();
    $('li').hover(function(){
        $(this).children("span").show();
        $('.edit').hide();
        $(this).children(".edit").show();
        $('.text-danger').empty();
    });
    $('.edit').click(function(){
        $(this).hide();
        $(this).siblings("input[type=text]").show().focus();
        $(this).siblings(".save").show();
        $('.text-danger').empty();
    });
    $('.save').click(function(){
        var id = $(this).attr('val');
        var value = $('#'+id).val();
        if($('#'+id).valid()) {
            $.ajax({
                url:  "{{ url('user/'.$user->id) }}",   
                type: "POST",
                data:{
                    colum: id,
                    value: value,
                    _token: $('meta[name="_token"]').attr('content')
                },
                success: function(response) {
                    if (response.status) {
                        $("."+id).show();
                        $("."+id).text(value);
                        $('input[type=text]').hide();
                        $('.save').hide();
                        $("#"+id).siblings('.text-danger').empty();
                        if(id == 'first_name'){
                            $('.head').text('Welcome '+value);
                            $('.user a').text(value);
                        }
                    } else {
                        alert(response.last_name);
                        $("#"+id).show().focus();
                        $("#"+id).siblings('.text-danger').empty();
                        $("#"+id).siblings('.text-danger').append(response.msg);
                    }
                },
                error: function(data){
                    if( data.status === 422 ) {
                        var errors = data.responseJSON;
                        errorHtml='<div class="alert alert-danger col-md-8"><strong>Whoops! Something went wrong!</strong><br><br><ul>';
                        $.each( errors, function( key, value ) {
                               errorHtml += '<li>' + value[0] + '</li>';
                        });
                        errorHtml += '</ul></div>';
                        $( '#formerrors' ).append( errorHtml );
                    }
                }
            });
        }        
    });
</script>
@endsection