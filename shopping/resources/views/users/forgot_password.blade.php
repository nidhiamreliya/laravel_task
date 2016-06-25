<body style="background:#F7F7F7;">
<!-- login-page -->
<div class="login">
    <div class="container">
        <div class="login-grids">
            <div class="col-md-6 col-md-offset-4 log">
                <div class="strip"></div>
                <?php
                    $data = array(
                        'name' => 'forgot_password',
                        'id'   => 'forgot_password'
                    );
                ?> 
                <?php echo form_open('forgot_password/error', $data);?>
                    <h5>E-mail:</h5>  
                    <input type="text" id="email_id" name="email_id" style="margin: 0px;" class="form-control"  placeholder="E-mail@example.com" value="<?php echo set_value('email_id')?>"/>
                    <label class="text-danger">
                        <?php echo form_error('email_id'); ?>
                    </label> 
                    <label class="text-danger">
                    <?php
                        if(isset($err_message))
                        {
                            echo $err_message;
                        }
                    ?>
                    </label>     
                    <br/>
                    <input type="submit" value="Submit">
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>
<!-- //login-page -->
