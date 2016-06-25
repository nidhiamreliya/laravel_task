<body style="background:#F7F7F7;">
<!-- login-page -->
<div class="login">
    <div class="container">
        <div class="login-grids">
            <div class="col-md-6 col-md-offset-4 log">
                <?php
                    $data = array(
                        'name'      => 'change_psw',
                        'id'        => 'change_psw'
                    );
                ?> 
                <?php echo form_open('password/change/'. $this->uri->segment(3) , $data);?>
                    <h5>New Password:</h5>  
                    <input type="password" id="password" name="password" style="margin: 0px;" class="form-control"  placeholder="New Password" />
                    <label class="text-danger">
                        <?php echo form_error('password'); ?>
                    </label> 
                    <h5>Confirm Password:</h5>
                    <input type="password" id="confirm_password" name="confirm_password" style="margin: 0px;" class="form-control" placeholder="Confirm-Password"  />
                    <label class="text-danger">
                        <?php echo form_error('confirm_password'); ?>
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
                      
                    <input type="submit" value="Login">
                    
                <?php echo form_close();?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //login-page -->
