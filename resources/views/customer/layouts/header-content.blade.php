<!-- Header Start -->
<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                <div class="cs-logo">
                    <div class="cs-media">
                        <figure><a href=""><img src="{{ asset('customer-assets/assets/images/cs-logo.png') }}" alt="" /></a></figure>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                <div class="cs-main-nav pull-right">
                    <nav class="main-navigation">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="#">Inventory</a>
                                <ul>
                                    <li><a href="auto-grid.html">Grid Style</a></li>
                                    <li><a href="auto-listing.html">Classic Style</a></li>
                                    <li><a href="car-listing-detail.html">Detail Page</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Vendor</a>
                                <ul>
                                    <li><a href="{{ route('add-service') }}">Request Vehicle Service</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Compare</a>
                                <ul>
                                    <li><a href="compare.html">Listing</a></li>
                                </ul>
                            </li>
                            <li><a href="#">pages</a>
                                <ul>
                                    <li><a href="services.html">Our Services</a></li>
                                    <li><a href="user-post-new-vehicles.html">Post a Vehicle</a></li>
                                    <li><a href="price-plane.html">Listing Packages</a></li>
                                    <li><a href="faq.html">FAQ's & Help</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="search-result.html">Search Result</a></li>
                                    <li><a href="underconstruction.html">Under Construction</a></li>
                                    <li><a href="underconstruction-2.html">Under Construction 2</a></li>
                                    <li><a href="signin-page.html">Signup/Sign in</a></li>
                                    <li><a href="contact-us.html">Contact us</a></li>
                                    
                                </ul>
                            </li>
                            <li><a href="#">News</a>
                                <ul>
                                    <li><a href="blog-listing-large.html">Large View</a></li>
                                    <li><a href="blog-listing-medium.html">Medium View</a></li>
                                    <li><a href="blog-listing-grid.html">Grid View</a></li>
                                    <li class="menu-item-has-children"><a href="#">Detail View</a>
                                        <ul>
                                            <li><a href="blog-detail-sound.html">With Audio</a></li>
                                            <li><a href="blog-detail-video.html">With Video</a></li>
                                            <li><a href="blog-detail-sound.html">With Soundcloud</a></li>
                                            <li><a href="blog-detail-slider.html">With Slider</a></li>
                                            <li><a href="blog-detail-post.html">Featured Image</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Shop</a>
                                <ul>
                                    <li><a href="shop-listing.html">Products</a></li>
                                    <li><a href="shop-detail.html">Detail View</a></li>
                                    <li><a href="shop-cart.html">Cart</a></li>
                                    <li><a href="shop-checkout.html">Checkout</a></li>
                                </ul>
                            </li>
                            <li class="cs-user-option">
                                <div class="cs-login">
                                    
                                    <div class="cs-login-dropdown"> <a href="#"><i class="icon-user2"></i> {{ Auth::User()->last_name }}<i class="icon-chevron-down2"></i></a>
                                        <div class="cs-user-dropdown"> <strong>Post a new Ad</strong>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                {{-- <a type="submit" class="btn-sign-out" href="#">Logout</a> --}}
                                            <button href="{{ route('logout') }}" class="dropdown-item" type="submit">Logout</button>
                                            </form>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </li>
                        </ul>
                    </nav>
            </div>
        </div>
    </div>
    </div>
</header>
<!-- Header End -->