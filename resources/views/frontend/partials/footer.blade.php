<link rel="stylesheet" href="css/footer.css">
<!-- ##### Footer Area Start ##### -->
<footer class="footer_area clearfix">
    <div class="container">
        <div class="row">
            <!-- Single Widget Area -->
            <div class="col-12 col-md-6">
                <div class="single_widget_area d-flex mb-30">
                    <!-- Logo -->

                    <!-- Footer Menu -->
                    <div class="footer_menu">
                        <div class="footer-logo mr-50">
                            <a class="nav-brand" href="{{ asset('/') }}"><img class="logo logo-footer"
                                    src="img/core-img/logo.jpeg" alt=""></a>
                        </div>
                        <ul>
                            <li><a href="{{ asset('/shop') }}">Shop</a></li>
                            <li><a href="{{ asset('/contact') }}">Contact</a></li>
                            <li><a href="{{ asset('/blog') }}">Blog</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <!-- Single Widget Area -->
            <div class="col-12 col-md-6">
                <div class="single_widget_area mb-30">
                    <ul class="footer_widget_menu">
                        <li><a href="#">{{ $thongtinlienlac->Email }}</a></li>
                        <li><a href="#">{{ $thongtinlienlac->SDT }}</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row align-items-end subscribe ">
            <!-- Single Widget Area -->
            <div class="col-12 col-md-6">
                <div class="single_widget_area">
                    <div class="footer_heading mb-30">
                        <h6>Subscribe</h6>
                    </div>
                    <div class="subscribtion_form">
                        <form action="#" method="post">
                            <input type="email" name="mail" class="mail" id="input-mail"
                                placeholder="Your email here">
                            <button type="submit" class="submit"><i class="fa fa-long-arrow-right"
                                    aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Single Widget Area -->
            <div class="col-12 col-md-6">
                <div class="single_widget_area">
                    <div class="footer_social_area">
                        <a href="{{ $thongtinlienlac->Instagram }}" data-toggle="tooltip" data-placement="top"
                            title="Instagram" target="blank"><img width="50px" src="img/core-img/instagram.png"
                                alt=""></a>
                        <a href="{{ $thongtinlienlac->Twitter }}" data-toggle="tooltip" data-placement="top"
                            title="Twitter" target="blank"><img width="50px" src="img/core-img/twitter.png"
                                alt=""></a>
                        <a href="{{ $thongtinlienlac->Facebook }}" data-toggle="tooltip" data-placement="top"
                            title="Facebook" target="blank"><img width="50px" src="img/core-img/facebook.png"
                                alt=""></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <p style="color: white;">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | Made with group <i class="fa fa-heart-o"
                        aria-hidden="true"></i> by <a href="#" target="_blank">Hoi Ban Tron.</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>

    </div>
</footer>
<!-- ##### Footer Area End ##### -->
