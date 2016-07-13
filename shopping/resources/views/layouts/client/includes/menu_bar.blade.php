<!-- top-header -->
<div class="top_bg">
    <div class="container">
        <div class="header_top-sec">
            <div class="top_right">
                <ul>
                    <li>Contact</li>|
                    <li><a href="{{ url('orders') }}">Track Order</a></li>
                </ul>
            </div>
            <div class="top_left">
                <ul> 
                    @if($user = Sentinel::check())
                        <li class="top_link user"><a href="{{ url('user/'.$user->slug.'/edit') }}">{{ $user->first_name }}</a></li>
                        <li>|</li>
                        <li class="top_link"><a href="{{ url('logout') }}">LogOut </a></li>
                    @else
                        <li class="top_link"><a href="{{ url('user') }}">LogIn</a></li> 
                    @endif
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
            <a href="{{ url('/') }}">Pendent Store</a>       
        </div>
        <div class="header_right">
            <div class="cart box_1">
                <a href="{{ url('cart') }}">
                    <h3> <div class="total">
                    (<span id="total_items"></span> Items)</div>
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
                <li class="{{ Request::segment(1) == '' ? 'active grid': '' }}"><a class="color1" href="{{ url('/') }}">Home</a></li>
                <li class="{{ Request::segment(1) == 'jewellery' || Request::segment(1) == 'category' ? 'active grid': '' }}"><a class="color1" href="{{ url('jewellery') }}">Jewellery</a></li>       
            </ul> 
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
    $.ajax({
        type: 'post',
        url: '{{ url('cart/count') }}',
        data:{
            items:"total",
            _token: $('meta[name="_token"]').attr('content')
        },
        success:function(response) {
            if(response.status){
                $('#total_items').html(response.msg);
            } else {
                $('#total_items').html(0);
            }
        }
    })
});
</script>