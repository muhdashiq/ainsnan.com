<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Ainsnan.com | Home</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Vectus HTML5 Template - v1.0">
    <meta name="author" content="ainsnan.com">
    
    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS
  ================================================== -->
    
    <!-- Web Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,600,500,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,500,300' rel='stylesheet' type='text/css'>
    
    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ URL::asset('css/theme.css') }}">   
    <link rel="stylesheet" href="{{ URL::asset('css/theme-animate.css') }}">   
    <link rel="stylesheet" href="{{ URL::asset('css/theme-elements.css') }}">   
    <link rel="stylesheet" href="{{ URL::asset('css/plugins.css') }}">    
    
    <!-- Skin CSS -->
    <link id="skin" rel="stylesheet" href="{{ URL::asset('css/skins/sun.css') }}">
    <!-- Icon Fonts -->
    <link rel='stylesheet' href="{{ URL::asset('fonts/font-awesome.min.css') }}" type='text/css' media='screen' />    
    
    <!-- Library Css -->
    <link rel="stylesheet" href="{{ URL::asset('css/skeleton.css') }}"> 
    <link rel="stylesheet" href="{{ URL::asset('vendor/flexslider/flexslider.css') }}">
    
    <link rel="stylesheet" href="{{ URL::asset('vendor/isotope/isotope.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/owl/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/prettyPhoto/prettyPhoto.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/rs-plugin/css/settings.css') }}" media="screen" /> 
    
    <!-- Responsive Theme -->
    <link rel="stylesheet" href="{{ URL::asset('css/theme-responsive.css') }}">
    
    <!-- Library Js -->
    <script src="{{ URL::asset('vendor/modernizr.js') }}"></script>
    
    @yield('apis') 
    
    <!--[if IE]>
        <link rel="stylesheet" href="css/ie.css">
    <![endif]-->
    
    <!--[if lte IE 8]>
        <script src="vendor/respond.js"></script>
    <![endif]-->
    
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{ URL::asset('images/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ URL::asset('images/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('images/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('images/apple-touch-icon-114x114.png') }}">
</head>  
<body>
    <!-- BOF Loader -->
     <div class="loader">
         <div class="spinner spinner-double-bounce">
              <div class="double-bounce1"></div>
              <div class="double-bounce2"></div>
         </div>
    </div>
    <!-- EOF Loader -->
    
    
    
    <!-- BOF Header -->   
    <header>
        <!-- BOF Top Bar -->
        <div class="jx-header-1">
        
            <!-- BDF TOOLBAR -->
            <div class="jx-topbar">
                <div class="container">
                
                    <div class="eight columns left">
                        <div class="jx-left-topbar">Welcome to Ainsnan.com</div>
                    </div>
                    <!-- Left Items -->
                    
                    <div class="eight columns right">
                        
                        <div class="jx-right-topbar">
                            <div class="email left"><i class="fa fa-envelope"></i> enquiry@ainsnan.com</div>
                            
                                <ul class="right">
                                    <li><a href="#"><i class="fa fa-user"></i></a></li>
                                    <li><a href="http://www.facebook.com/ainsnan"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="http://www.twitter.com/ainsnan"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="http://www.googleplus.com/ainsnan"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                                <!-- Social icons-->
                            </div>
                            
                    </div>
                    <!-- Right Items -->
                </div>
            </div>
            <!-- EDF TOOLBAR --> 
            <div class="jx-header header-line">
                <div class="container">
                
                    <div class="four columns">
                        <div class="jx-header-logo">
                            <a href="/"><img src="{{ URL::asset('images/header_logo.png') }}" alt="" /></a>
                         </div>
                        <!-- Logo -->
                    </div>                
                    <div class="twelve columns">
                    
                        <div class="header-info">
                            <div class="toll-free"><i class="fa fa-phone"></i> DIAL NOW</div>
                            <ul>
                                <li class="top-space">
                                <div class="icon"><i class="fa fa-map-marker"></i></div>
                                <div class="position">
                                <div class="location">Location</div>
                                <div class="address">DOHA, QATAR</div>
                                </div>
                                </li>
                                
                                <li class="top-space">
                                <div class="icon"><i class="fa fa-clock-o"></i></div>
                                <div class="position">
                                <div class="time">Office Timing</div>
                                <div class="date">SAT - THU 8:00 - 17:00</div>
                                </div>
                                </li>
                                
                                <li>
                                    <div class="toll-free-number">44 98 5096</div>
                                </li> 
                            </ul>
                        </div>
                        <!-- Header Info -->
                    </div>                
                </div>
            </div>     
               
        </div>
        <!-- EOF Top Bar -->
        <!-- EDF Header -->
        
        @include('mainMenu')
        <!-- BOF Main Menu -->
        
        @yield('homeSlider');
        
    </header>     
    
    <!-- EOF Main Menu -->
    
    <!-- BOF Main Content -->
    @yield('mainContent')k
    <!-- EOF Main Content -->
    
    
    <!-- BOF FOOTER -->
    
    <footer class="jx-footer-section">
        <div class="jx-footer-1">
        
            <!-- BDF widget FOOTER -->        
            <div class="jx-footer jx-container">
                <div class="container">
                
                    <!-- BOF Footer widget #1 -->
                    <div class="four columns">
       
                        <div class="widget">             
                            <div class="jx-footer-logo">
                                <a href="/"><img src="{{ URL::asset('images/header_logo.png') }}" alt="" /></a>
                            </div>
                            <!-- footer logo -->
                            <div class="jx-about">
                            <div class="jx-title-border"></div>
                            <p>AINSNAN trading and contracting is a leading trading and contracting companies in Qatar, UAE, and India Undertaking major Electrical, Mechanical, Plumbing, Fire fighting and Fire alarm.</p>
                            <!-- Content -->
                            <div class="jx-btn jx-black"> 
                                <div class="jx-btn jx-black"> 
                                    <a href="/about" class="jx-btn-default">
                                        <span>  
                                            <i class="btn-icon-left fa fa-mail-forward"></i>
                                            <span>Read More</span>
                                            <i class="btn-icon-right fa fa-mail-forward"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            </div>
                            
                        </div>
                        <!-- About Us -->
                            <div class="jx-border"></div>
                        
                        <div class="widget">
                            <div class="jx-footer-newsletter">
                                <div class="jx-footer-title">Newsletter Subscribe</div>
                                <!-- widget Title -->                         
                                <p>News letter service is not activated yet.</p>                             
                            
                                <form action="#" id="newsletter" method="post" class="jx-form-wrapper">
                                    <div id="newsletter-email" class="search-inline-block">
                                        <input  id="newsletter-email-1" name="newsletter_email" placeholder="Newsletter Subscribe" class="jx-form-name" type="text">
                                    </div>
                                    <div id="newsletter-submit">
                                        <button type="submit"><i class="fa fa-envelope-o"></i></button>
                                    <!-- Submit Button -->  
                                    </div>
                                </form>
                                
                             </div>
                        </div> 
                        <!-- Newsletter Subscribe -->
                    </div>                
                    <!-- EOF Footer widget #1 -->
                    
                    <!-- BOF Footer widget #2-->
                    <div class="four columns">
                        <div class="widget">
                            <div class="jx-footer-title">Recent projects</div>
                            <!-- widget Title -->
                            <div class="jx-widget-recent-post">
                                <ul>
                                    <li>
                                        <div class="image"><img src="{{ URL::asset('images/blog-s-1.jpg') }}" alt="" /></div>
                                        <div class="post-content">
                                            <div class="title"><a href="#">Responsive HTML Design</a></div>
                                            <div class="date">29 JUN 2015</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image"><img src="{{ URL::asset('images/blog-s-2.jpg') }}" alt="" /></div>
                                         <div class="post-content">
                                            <div class="title"><a href="#">Clean and Modern</a></div>
                                            <div class="date">02 AUG 2015</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image"><img src="{{ URL::asset('images/blog-s-3.jpg') }}" alt="" /></div>
                                         <div class="post-content">
                                            <div class="title"><a href="#">Unlimited Control Options</a></div>
                                            <div class="date">20 JAN 2015</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image"><img src="{{ URL::asset('images/blog-s-4.jpg') }}" alt="" /></div>
                                         <div class="post-content">
                                            <div class="title"><a href="#">Responsive HTML Design</a></div>
                                            <div class="date">20 JAN 2015</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Recent Post -->
                        </div>
                    </div>                
                    <!-- EOF Footer widget #2-->
                    
                    <!-- BOF Footer widget #3 -->
                    <div class="four columns">
                    
                        <div class="widget">                
                            <div class="jx-footer-title">Tags</div>
                            <!-- widget Title -->  
                            
                            <div class="jx-tags-footer">
                                <ul>
                                    <li>MEP</li>
                                    <li>Electrical</li>
                                    <li>BMS</li>
                                    <li>CCTV</li>
                                    <li>Cabling</li>
                                    <li>Drainage</li>
                                    <li>Plumbing</li>
                                    <li>Fire Alarm
                                    <li>Firefighting</li>
                                    <li>HVAC</li>
                                    <li>Ducting</li>
                                </ul>
                            </div>
                            
                        </div>
                        <!-- Tags Group -->                      
                        <div class="jx-border"></div>
                        <div class="widget">                
                            <div class="jx-footer-title">Latest Snaps</div>
                            <!-- widget Title -->  
                            
                            <div class="jx-footer-flickr">
                                <ul>
                                    <li><a href="{{ URL::asset('images/portfolio-w-1.jpg') }}" data-rel="prettyPhoto"><img src="{{ URL::asset('images/flick-1.jpg') }}" alt="" /></a></li>
                                    <!-- item 01 -->
                                    <li><a href="{{ URL::asset('images/portfolio-w-2.jpg') }}" data-rel="prettyPhoto"><img src="{{ URL::asset('images/flick-2.jpg') }}" alt="" /></a></li>
                                    <!-- item 01 -->
                                    <li><a href="{{ URL::asset('images/portfolio-w-3.jpg') }}" data-rel="prettyPhoto"><img src="{{ URL::asset('images/flick-3.jpg') }}" alt="" /></a></li>
                                    <!-- item 01 -->
                                    <li><a href="{{ URL::asset('images/portfolio-w-4.jpg') }}" data-rel="prettyPhoto"><img src="{{ URL::asset('images/flick-4.jpg') }}" alt="" /></a></li>
                                    <!-- item 01 -->
                                    <li><a href="{{ URL::asset('images/portfolio-w-5.jpg') }}" data-rel="prettyPhoto"><img src="{{ URL::asset('images/flick-5.jpg') }}" alt="" /></a></li>
                                    <!-- item 01 -->
                                    <li><a href="{{ URL::asset('images/portfolio-w-6.jpg') }}" data-rel="prettyPhoto"><img src="{{ URL::asset('images/flick-6.') }}" alt="" /></a></li>
                                    <!-- item 01 -->
                                </ul>    
                            </div>
                            
                        </div>
                        <!-- Flickr -->
                    
                    </div>                
                    <!-- EOF Footer widget #3-->
                    
                    <!-- BOF Footer widget #4 -->
                    <div class="four columns">
                    
                        <div class="widget">
                            <div class="jx-footer-title">Video</div>
                            <!-- widget Title -->                         
                            <iframe height="160" src="https://www.youtube.com/embed/hr3QyhiD50k" ></iframe>
                        </div> 
                        
                        <div class="widget">
                            <div class="jx-footer-title">Contacts</div>
                            <!-- widget Title -->                         
                            
                            <div class="jx-footer-address">
                                <ul>
                                    <li>
                                    <i class="line-icon icon-location"></i>
                                    <div>Doha, Qatar</div>
                                    </li>
                                    <li>
                                    <i class="line-icon icon-mobile"></i>
                                    <div class="tel"><strong>Tel :</strong>  44985096</div>
                                    <div class="fax"><strong>Mob :</strong> 33477406, 33642957</div>
                                    </li>
                                    <li>
                                    <i class="line-icon icon-globe"></i>
                                    <div class="email"><strong>Email :</strong> enquiry@ainsnan.com</div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Contact Address -->
                        </div> 
                                         
                    </div>                  
                    <!-- EOF Footer widget #4 -->
                </div>
            </div>
            
            <!-- EDF widget FOOTER -->
    
    
            <!-- BDF SUB FOOTER -->        
            <div class="jx-sub-footer jx-container">
                <div class="container"> 
                
                    <div class="eight columns">
                        <div class="jx-copy-right">Copyright © 2015 Powered By <a href="/">ainsnan.com </a>  All Rights Reserved. Developed and delivered by <a href="http://addin.in/">addin.in</a></div>
                    </div>                
                    <!-- Copyright Text -->
                    
                    <div class="eight columns">
                       
                       <div class="jx-footer-social-icon">
                        <ul>                            
                            <li class="facebook">
                            <a href="http://www.facebook.com/#" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                           
                            <li class="twitter">
                            <a href="http://www.twitter.com/#" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
                            
                            <li class="dribbble">
                            <a href="http://www.dribbble.com/#" target="_blank"><i class="fa fa-dribbble"></i></a>
                            </li>
                                                                                   
                            <li class="youtube">
                            <a href="http://www.youtube.com/#" target="_blank"><i class="fa fa-youtube"></i></a>
                            </li>
                            
                            <li class="googleplus">
                            <a href="http://www.googleplus.com/#" target="_blank"><i class="fa fa-google-plus"></i></a>
                            </li>
                        </ul>
                     </div>
                       
                       
                    </div>
                    <!-- Social Icons -->                
                
                </div>
            </div>
            <!-- EDF SUB FOOTER -->        
        
        </div>        
    </footer>
     
    <!-- EOF FOOTER -->
    
        
    <!-- Footer -->
    
    <script type="text/javascript" src="{{ URL::asset('vendor/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('vendor/respond.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('vendor/jquery.appear.js') }}"></script>    
    <script type="text/javascript" src="{{ URL::asset('vendor/prettyPhoto/jquery.prettyPhoto.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('vendor/isotope/jquery.isotope.min.js') }}"></script>
    <script type='text/javascript' src='{{ URL::asset('vendor/form-validator/jquery.form-validator.min.js') }}'></script>
    <script type="text/javascript" src="{{ URL::asset('vendor/flexslider/jquery.flexslider.js') }}"></script>   
    <script type="text/javascript" src="{{ URL::asset('vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    
    @if( isset($homeFlag))
    <!-- Home JS -->
    <script src="{{ URL::asset('js/custom/home.js') }}"></script>
    @endif

    <!-- Theme Initializer -->
    <script src="{{ URL::asset('js/theme.js') }}"></script>
    
    @yield('googleMap')
    
    
</body>
</html>