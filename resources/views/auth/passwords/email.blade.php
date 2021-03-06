<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="{{asset('/allscript')}}/css/vendor/simple-line-icons.css">
    <link rel="stylesheet" href="{{asset('/allscript')}}/css/icon.css">
    <link rel="stylesheet" href="{{asset('/allscript')}}/css/login.css">
    <link rel="stylesheet" href="{{asset('/allscript')}}/css/style.css">

    <!-- favicon -->
    <link rel="icon" href="favicon.ico">
    <title>Register - HOTLancer</title>
</head>
<body>

    <!-- HEADER -->
    <div class="header-wrap">
        <header>
            <!-- LOGO -->
            <a href="index-2.html">
                <figure class="logo">
                    <img src="{{ asset('allscript') }}/images/logo.png" alt="logo">
                </figure>
            </a>
            <!-- /LOGO -->

            <!-- MOBILE MENU HANDLER -->
            <div class="mobile-menu-handler left primary">
                <img src="{{ asset('allscript') }}/images/pull-icon.png" alt="pull-icon">
            </div>
            <!-- /MOBILE MENU HANDLER -->

            <!-- LOGO MOBILE -->
            <a href="index-2.html">
                <figure class="logo-mobile">
                    <img src="{{ asset('allscript') }}/images/logo_mobile.png" alt="logo-mobile">
                </figure>
            </a>
            <!-- /LOGO MOBILE -->

            <!-- USER BOARD -->
            <div class="user-board">
                <!-- ACCOUNT ACTIONS -->
                <div class="account-actions no-space">
                    <a href="{{ route('register') }}" class="interesting-link">REGISTER</a>
                    <a href="{{ route('login') }}" class="interesting-link">LOGIN</a>
                    <a href="{{ route('login') }}" class="button primary">POST</a>
                </div>
                <!-- /ACCOUNT ACTIONS -->
            </div>
            <!-- /USER BOARD -->
        </header>
    </div>
    <!-- /HEADER -->

    <!-- SIDE MENU -->
    <div id="mobile-menu" class="side-menu left closed">
        <!-- SVG PLUS -->
        <svg class="svg-plus">
            <use xlink:href="#svg-plus"></use>
        </svg>
        <!-- /SVG PLUS -->

        <!-- SIDE MENU HEADER -->
        <div class="side-menu-header">
            <figure class="logo small">
                <img src="{{asset('/allscript')}}/images/logo.png" alt="logo">
            </figure>
        </div>
        <!-- /SIDE MENU HEADER -->

        
        <!-- DROPDOWN -->
        <ul class="dropdown dark hover-effect interactive">
            <!-- DROPDOWN ITEM -->
            <li class="dropdown-item">
           
            <a href="{{ route('login') }}" >LOGIN</a>
                    
            </li>

            <!-- DROPDOWN ITEM -->
            <li class="dropdown-item">
            <a href="{{ route('register') }}" >REGISTER</a>
            </li>
            <!-- /DROPDOWN ITEM -->

            <!-- DROPDOWN ITEM -->
            <li class="dropdown-item">
            <a href="login" >POST</a>
            </li>
            <!-- /DROPDOWN ITEM -->
        </ul>
        <!-- /DROPDOWN -->
    </div>
    <!-- /SIDE MENU -->
    <div id="registration-form" style="margin-top:40px;margin-bottom:40px;">
        <section id="registration-form">
            <div class="mfp-content">
                <!-- FORM POPUP -->
                <div id="promo-popup" class="form-popup promo air-card">
                    
                <!-- FORM POPUP CONTENT -->
                <!-- FORM POPUP CONTENT -->
                    <div class="form-popup-content">
                        <div class="form-popup-headline secondary">
                            <h2>Reset your password</h2>
                            <!--<p>Enter now to your account and start buying and selling!</p> -->
                        </div>
                        <!-- LINE SEPARATOR -->
                        <hr class="line-separator">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                         @endif

                        <!-- /LINE SEPARATOR -->
                        <form method="POST" action="{{ route('password.email') }}" id="register-form" novalidate="novalidate">
                        @csrf                       
                            <div class="control-feedback">
                                
                                <input id="user_name" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" placeholder="Enter Email" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                
                                <span class="glyphicon air-icon-user form-control-feedback" aria-hidden="true"></span>
                            </div>
                            
                             <div class="control-feedback-botton">
                                <button class="button mid login-button" type="submit" name="forgot_submit"><span class="sl-icon icon-plus"></span> Send Reset Email </button>                       
                            </div>
                        </form>                 
                        <footer class="text-center fotter-login">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="p-md-top-bottom m-md-bottom">
                                    <div class="line-heading p-sm-bottom m-sm-top-bottom text-muted">Already have an account?</div>
                                    <a class="btn btn-signup" href="{{ route('login') }}">
                                        <span class="sl-icon icon-login"></span> Login
                                    </a>
                                    <a class="btn btn-signup" href="{{ route('register') }}">
                                        <span class="sl-icon icon-user"></span> Singup
                                    </a>
                                </div>
                                
                            </div>
                        </footer>
                    </div>
                
                    <!-- /FORM POPUP CONTENT -->
                </div>
                <!-- /FORM POPUP -->
            </div>
        </section>
    </div>
    <!-- FOOTER -->
    <footer>
        <!-- FOOTER TOP -->
        <div id="footer-top-wrap">
            <div id="footer-top">
                <!-- COMPANY INFO -->
                <div class="company-info">
                    <figure class="logo small">
                        <img src="{{ asset('allscript') }}/images//logo_small.png" alt="logo-small">
                    </figure>
                    <p>Lorem ipsum dolor sit amet, consectetur isicing elit, sed do eiusmod tempor incididunt ut labo dolore magna ua.</p>
                    <ul class="company-info-list">
                        <li class="company-info-item">
                            <span class="icon-present"></span>
                            <p><span>850.296</span> Products</p>
                        </li>
                        <li class="company-info-item">
                            <span class="icon-energy"></span>
                            <p><span>1.207.300</span> Members</p>
                        </li>
                        <li class="company-info-item">
                            <span class="icon-user"></span>
                            <p><span>74.059</span> Sellers</p>
                        </li>
                    </ul>
                    <!-- SOCIAL LINKS -->
                    <ul class="social-links">
                        <li class="social-link fb">
                            <a href="#"></a>
                        </li>
                        <li class="social-link twt">
                            <a href="#"></a>
                        </li>
                        <li class="social-link db">
                            <a href="#"></a>
                        </li>
                        <li class="social-link rss">
                            <a href="#"></a>
                        </li>
                    </ul>
                    <!-- /SOCIAL LINKS -->
                </div>
                <!-- /COMPANY INFO -->

                <!-- LINK INFO -->
                <div class="link-info">
                    <p class="footer-title">Our Community</p>
                    <!-- LINK LIST -->
                    <ul class="link-list">
                        <li class="link-item">
                            <div class="bullet"></div>
                            <a href="#">How to Join us</a>
                        </li>
                        <li class="link-item">
                            <div class="bullet"></div>
                            <a href="#">Buying and Selling</a>
                        </li>
                        <li class="link-item">
                            <div class="bullet"></div>
                            <a href="forum.html">Emerald Forum</a>
                        </li>
                        <li class="link-item">
                            <div class="bullet"></div>
                            <a href="blog-v1.html">Emerald Blog</a>
                        </li>
                        <li class="link-item">
                            <div class="bullet"></div>
                            <a href="#">Free Goods</a>
                        </li>
                        <li class="link-item">
                            <div class="bullet"></div>
                            <a href="#">Job Oportunities</a>
                        </li>
                    </ul>
                    <!-- /LINK LIST -->
                </div>
                <!-- /LINK INFO -->

                <!-- LINK INFO -->
                <div class="link-info">
                    <p class="footer-title">Member Links</p>
                    <!-- LINK LIST -->
                    <ul class="link-list">
                        <li class="link-item">
                            <div class="bullet"></div>
                            <a href="#">Partner Program</a>
                        </li>
                        <li class="link-item">
                            <div class="bullet"></div>
                            <a href="#">Starting a Shop</a>
                        </li>
                        <li class="link-item">
                            <div class="bullet"></div>
                            <a href="#">Purchase Credits</a>
                        </li>
                        <li class="link-item">
                            <div class="bullet"></div>
                            <a href="#">Withdrawals</a>
                        </li>
                        <li class="link-item">
                            <div class="bullet"></div>
                            <a href="#">World Meetings</a>
                        </li>
                        <li class="link-item">
                            <div class="bullet"></div>
                            <a href="#">How to Auction</a>
                        </li>
                    </ul>
                    <!-- /LINK LIST -->
                </div>
                <!-- /LINK INFO -->

                <!-- LINK INFO -->
                <div class="link-info">
                    <p class="footer-title">Help and FAQs</p>
                    <!-- LINK LIST -->
                    <ul class="link-list">
                        <li class="link-item">
                            <div class="bullet"></div>
                            <a href="#">Help Center</a>
                        </li>
                        <li class="link-item">
                            <div class="bullet"></div>
                            <a href="#">FAQs</a>
                        </li>
                        <li class="link-item">
                            <div class="bullet"></div>
                            <a href="#">Terms and Conditions</a>
                        </li>
                        <li class="link-item">
                            <div class="bullet"></div>
                            <a href="#">Products Licenses</a>
                        </li>
                        <li class="link-item">
                            <div class="bullet"></div>
                            <a href="#">Security Information</a>
                        </li>
                    </ul>
                    <!-- /LINK LIST -->
                </div>
                <!-- /LINK INFO -->

                <!-- TWITTER FEED -->
                <div class="twitter-feed">
                    <p class="footer-title">Twitter Feed</p>
                    <!-- TWEETS -->
                    <ul class="tweets"></ul>
                    <!-- /TWEETS -->
                </div>
                <!-- /TWITTER FEED -->
            </div>
        </div>
        <!-- /FOOTER TOP -->

        <!-- FOOTER BOTTOM -->
        <div id="footer-bottom-wrap">
            <div id="footer-bottom">
                <p><span>&copy;</span><a href="index-2.html">Emerald Dragon</a> Template - All Rights Reserved 2015</p>
            </div>
        </div>
        <!-- /FOOTER BOTTOM -->
    </footer>
    <!-- /FOOTER -->

    <div class="shadow-film closed"></div>


<!-- SVG ARROW -->
<svg style="display: none;">    
    <symbol id="svg-arrow" viewBox="0 0 3.923 6.64014" preserveAspectRatio="xMinYMin meet">
        <path d="M3.711,2.92L0.994,0.202c-0.215-0.213-0.562-0.213-0.776,0c-0.215,0.215-0.215,0.562,0,0.777l2.329,2.329
            L0.217,5.638c-0.215,0.215-0.214,0.562,0,0.776c0.214,0.214,0.562,0.215,0.776,0l2.717-2.718C3.925,3.482,3.925,3.135,3.711,2.92z"/>
    </symbol>
</svg>
<!-- /SVG ARROW -->

<!-- SVG STAR -->
<svg style="display: none;">
    <symbol id="svg-star" viewBox="0 0 10 10" preserveAspectRatio="xMinYMin meet">  
        <polygon points="4.994,0.249 6.538,3.376 9.99,3.878 7.492,6.313 8.082,9.751 4.994,8.129 1.907,9.751 
    2.495,6.313 -0.002,3.878 3.45,3.376 "/>
    </symbol>
</svg>
<!-- /SVG STAR -->

<!-- SVG PLUS -->
<svg style="display: none;">
    <symbol id="svg-plus" viewBox="0 0 13 13" preserveAspectRatio="xMinYMin meet">
        <rect x="5" width="3" height="13"/>
        <rect y="5" width="13" height="3"/>
    </symbol>
</svg>
<!-- /SVG PLUS -->

<!-- jQuery -->
<script src="{{asset('/allscript')}}/js/vendor/jquery-3.1.0.min.js"></script>

<!-- Side Menu -->
<script src="{{asset('/allscript')}}/js/side-menu.js"></script>

<!-- Footer -->
<script src="{{asset('/allscript')}}/js/footer.js"></script>

<!-- input field validate -->
<script src="{{asset('/allscript')}}/js/parsley.min.js"></script>
</body>

</html>