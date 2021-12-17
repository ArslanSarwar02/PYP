<?php
?>
<footer id="footer" class="navigation">
    <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>Quick links</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="<?php echo url_for('/');?>"><i class="fa  fa-home"></i>Home</a></li>
                    <li><a href="<?php echo url_for('/shop');?>"><i class="fa fa-shopping-cart"></i>SHOP</a></li>
                    <li><a href="<?php echo url_for('/contact_us');?> "><i class="fa fa-phone"></i>Contact Us</a></li>
                    <li><a href="<?php echo url_for('/about_us');?> "><i class="fa fa-address-book"></i>ABOUT US</a></li>
                    <li><a href="<?php echo url_for('/login');?> "><i class="fa fa-sign-in"></i>Login</a></li>
                    <li><a href="<?php echo url_for('/register');?> "><i class="fa fa-registered"></i>Register</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>Categories</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="#"><i class="fa fa-angle-double-right"></i>Home</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i>SHOP</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i>CONTACT US</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i>REGISTER</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i>LOGIN</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>Categories</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="#"><i class="fa fa-car"></i>CARS</a></li>
                    <li><a href="#"><i class="fa fa-motorcycle"></i>MOTORCYCLES</a></li>
                    <li><a href="#"><i class="fa fa-motorcycle"></i>Rickshaw</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                <ul class="list-unstyled list-inline social text-center">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="# "><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </div>
            <hr>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                <p class="h6">© All right Reversed
                    <a class="text-green ml-2" href="<?php url_for('/');?>" target="_blank">Pick Your Part<?php echo date('Y');?></a>.</p>
            </div>
            <hr>
        </div>
    </div>
</footer>
<!-- ./Footer -->
</body>
</html>