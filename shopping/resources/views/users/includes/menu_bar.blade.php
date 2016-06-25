<!-- top-header -->
<div class="top_bg">
    <div class="container">
        <div class="header_top-sec">
            <div class="top_right">
                <ul>
                    <li>Contact</li>|
                    <li><a href="#">Track Order</a></li>
                </ul>
            </div>
            <div class="top_left">
                <ul><!-- 
                <?php
                    //if($this->session->userdata('user_id') !== FALSE)
                    {
                ?> 
                        <li class="top_link user"><a href="#">first_name</a></li>
                        <li>|</li>
                        <li class="top_link"><a href="#">Log Out </a></li>
                <?php  
                    }
                    //else
                    {
                ?>-->
                        <li class="top_link"><a href="{{ url('login') }}">Log In</a></li> 
                <!--    <?php
                    }
                ?>    -->     
              </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- top-header -->
<!-- logo-cart -->
<div class="header_top">
    <div class="container">
        <div class="logo">
            <a href="#">Pendent Store</a>       
        </div>
        <div class="header_right">
            <div class="cart box_1">
                <a href="#">
                <h3> <div class="total">
                    (<span id="total_items"></span> items)</div>
                    <img src="{{ url('images/cart1.png') }}" alt=""/></h3>
                </a>
                <div class="clearfix"> </div>
            </div>         
        </div>
        <div class="clearfix"></div>  
    </div>
</div>
<!-- //logo-cart -->
<!------>
<div class="mega_nav">
    <div class="container">
        <div class="menu_sec">
            <!-- start header menu -->
            <ul class="megamenu skyblue">
                <li class="active grid"><a class="color1" href="{{ url('/') }}">Home</a></li>
                <li><a class="color1" href="{{ url('jewellery') }}">Jewellery</a></li>       
            </ul> 
            <div class="clearfix"></div>
        </div>
    </div>
</div>