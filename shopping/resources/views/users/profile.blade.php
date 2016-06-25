<!-- reg-form -->
<div class="reg-form">
    <div class="container">
        <div class="reg">
            <h3 class="text-center head">Welcome <?php echo $this->session->userdata('first_name') ?>
            </h3>
            <div class="col-md-10 col-md-offset-4 form-horizontal">
                <form id="edit_user">
                    <ul class="col-md-10">
                        <li class="text-info col-md-3 col-sm-3 col-xs-12">First Name: </li>
                        <li class="col-md-7 col-sm-7 col-xs-12">
                            <span class="first_name" ><?php echo $user['first_name']?></span>
                            <input type="text" id="first_name" name="first_name" value="">
                            <label class="text-danger"></label>
                            <a class="edit">Edit</a>
                            <a class="save" val="first_name">Save</a>
                        </li>
                    </ul>
                    <ul class="col-md-10">
                        <li class="text-info col-md-3 col-sm-3 col-xs-12">Last Name: </li>
                        <li class="col-md-7 col-sm-7 col-xs-12">
                            <span class="last_name"><?php echo $user['last_name']?></span>
                            <input type="text" id="last_name" name="last_name"   value="">
                            <label class="text-danger"></label>
                            <a class="edit">Edit</a>
                            <a class="save" val="last_name">Save</a>
                        </li>
                     </ul>               
                    <ul class="col-md-10">
                        <li class="text-info col-md-3 col-sm-3 col-xs-12">Email: </li>
                        <li class="col-md-7 col-sm-7 col-xs-12">
                            <span class="email_id"><?php echo $user['email_id']?></span>
                            <input type="text" id="email_id" name="email_id"  value="">
                            <label class="text-danger"></label>
                            <a class="edit">Edit</a>
                            <a class="save" val="email_id">Save</a>
                        </li>
                    </ul>
                    <ul class="col-md-10">
                        <li class="text-info col-md-3 col-sm-3 col-xs-12">Contact no.: </li>
                        <li class="col-md-7 col-sm-7 col-xs-12">
                            <span class="contact_no"><?php echo $user['contact_no']?></span>
                            <input type="text" id="contact_no" name="contact_no" value="">
                            <label class="text-danger"></label>
                            <a class="edit">Edit</a>
                            <a class="save" val="contact_no">Save</a>
                        </li>
                    </ul>
                    <ul class="col-md-10">
                        <li class="text-info col-md-3 col-sm-3 col-xs-12">Address:</li>
                        <li class="col-md-7 col-sm-7 col-xs-12">
                            <span class="address"><?php echo $user['address']?></span>
                            <input type="text" id="address" name="address" value="">
                            <label class="text-danger"></label>
                            <a class="edit">Edit</a>
                            <a class="save" val="address">Save</a>
                        </li>
                    </ul>
                    <ul class="col-md-10">
                        <li class="text-info col-md-3 col-sm-3 col-xs-12">City: </li>
                        <li class="col-md-7 col-sm-7 col-xs-12">
                            <span class="city"><?php echo $user['city']?></span>
                            <input type="text" id="city" name="city" value="">
                            <label class="text-danger"></label>
                            <a class="edit">Edit</a>
                            <a class="save" val="city">Save</a>
                        </li>
                    </ul>
                    <ul class="col-md-10">
                        <li class="text-info col-md-3 col-sm-3 col-xs-12">Zip_code: </li>
                        <li class="col-md-7 col-sm-7 col-xs-12">
                            <span class="zip_code"><?php echo $user['zip_code']?></span>
                            <input type="text" id="zip_code" name="zip_code" value="">
                            <label class="text-danger"></label>
                            <a class="edit">Edit</a>
                            <a class="save" val="zip_code">Save</a>
                        </li>
                    </ul>                       
                    <ul class="col-md-10">
                        <li class="text-info col-md-3 col-sm-3 col-xs-12">State: </li>
                        <li class="col-md-7 col-sm-7 col-xs-12">
                            <span class="state"><?php echo $user['state']?></span>
                            <input type="text" id="state" name="
                            state" value="">
                            <label class="text-danger"></label>
                            <a class="edit">Edit</a>
                            <a class="save" val="state">Save</a>
                        </li>
                    </ul>
                    <ul class="col-md-10">
                        <li class="text-info col-md-3 col-sm-3 col-xs-12">Country: </li>
                        <li class="col-md-7 col-sm-7 col-xs-12">
                            <span class="country"><?php echo $user['country']?></span>
                            <input type="text" id="country" name="country" value="">
                            <label class="text-danger"></label>
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
        var value = $(this).siblings("span").text();
        $(this).siblings("input[type=text]").attr('value', value);
        $(this).siblings("input[type=text]").show().focus();
        $(this).siblings(".save").show();
        $('.text-danger').empty();
    });
    $('.save').click(function(){
        var id = $(this).attr('val');
        var value = $('#'+id).val();
        if($('#'+id).valid()) {
            $.ajax({
                url: "<?php echo base_url(); ?>" + "e_shopping/index.php/user_profile/save",   
                type: "POST",
                dataType: "json",
                data:{
                    colum: id,
                    value: value,
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
                        $("#"+id).show().focus();
                        $("#"+id).siblings('.text-danger').empty();
                        $("#"+id).siblings('.text-danger').append(response.msg);
                    }
                }
            });
        }        
    });
</script>