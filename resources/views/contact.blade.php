@extends('app')
@section('mainContent')
    <!-- BOF Main Content -->
    <div role="main" class="main no-top-padding">
    

        <!-- BDF MAP -->
                
        <div class="jx-container jx-white-bg">
                <div class="jx-google-map">
                    <div id="map" class="jx-map"></div>
                </div>
        </div>
        
        <!-- EDF MAP -->


		<!-- BDF CONTACT -->
                
        <div class="jx-container jx-white-bg jx-padding">
            <div class="container">
            
               <div class="jx-section-title-1">            
                    <div class="jx-seperator-icon"><i class="fa fa-chevron-down"></i></div>
                    <div class="jx-title-position">
                        <div class="jx-left-border"></div>
                        <div class="jx-title">KEEP IN TOUCH</div>
                        <div class="jx-right-border"></div>
                    </div>
                    <div class="jx-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>  
                </div> 
                <!-- Section Title -->    
            
            <div class="jx-contact-form">
                        
                        <form action="#" id="contactForm" method="post">
                            <div class="row-1">
                                <div class="contact-full-name">
                                    <input type="text" id="full-name-contact" name="full_name" placeholder="Full Name" class="jx-form-text" />
                                    <!-- First Name Textbox -->
                                </div>
                                <div class="contact-email">
                                    <input type="text" id="email-contact" name="email" placeholder="Email Address" class="jx-form-text" data-validation="email"/>
                                    <!-- Email Name Textbox -->
                                </div>
                            </div>
                            
                            <div class="row-1">
                                <div class="contact-subject">
                                    <input type="text" id="subject-contact" name="subject" placeholder="Subject" class="jx-form-text" data-validation="required"/>
                                    <!-- Subject Textbox -->
                                </div>
                            </div>
                            
                            <div class="row-1">
                                <div class="contact-message">
                                    <textarea id="message-contact" name="message" class="jx-form-textarea" rows="5" cols="30" placeholder="Enter Your Message Here..."></textarea>
                                    <!-- Message Box -->
                                </div>  
                                <div class="contact-submit">
                                    
                                    <button type="submit"><i class="fa icon-paper-plane"></i> SEND</button>
                                    <!-- Submit Button -->
                                </div>
                            </div> 
                        </form>
                        
                        </div>

                
            </div>
        </div>
        
		<!-- EDF CONTACT -->

		<!-- BDF CONTACT LINKS -->

       <div class="jx-container jx-grey-bg jx-padding">
            <div class="container">

                <div class="one-third columns">
                    <div class="jx-contact-info">
                    
                        <div class="icon"><i class="line-icon icon-location"></i></div>
                                                    
                            <div class="item-position">
                                <div class="title">PHYSICAL ADDRESS</div>
                                <div class="address">MAKILN ROAD,4352 AVENUE STREET.</div>
                                <div class="address">CALIFORNIA, NY</div>                            
                            </div>
                                        
                    </div>
                </div>
                <!-- Contact -->
                
                <div class="one-third columns">

                    <div class="one-third columns">
                        <div class="jx-contact-info">
                        
                            <div class="icon"><i class="line-icon icon-globe"></i></div>
                                                        
                            <div class="item-position">
                                <div class="title">HOW TO CONTACT</div>
                                <div class="phone">TEL : (997) 54 215412 - (997) 54 132546</div>
                                <div class="fax">FAX : (997) 54 215465 - (997) 54 215412</div>                            
                            </div>
                                            
                        </div>
                    </div>

                </div>
                <!-- Contact -->
                
                <div class="one-third columns">
                
                   <div class="one-third columns">
                        <div class="jx-contact-info">
                        
                            <div class="icon"><i class="line-icon icon-paper-plane"></i></div>
                            
                            <div class="item-position">
                                <div class="title">KEEP IN TUCH</div>
                                <div class="date-time">MONDAY - FRIDAY : 09:00-08:00PM</div>
                                <div class="date-time">SUNDAY - THU : 08:00-10:00PM</div>                            
                            </div>
                                            
                        </div>
                    </div>
               
                </div>
                <!-- Contact -->
                
            </div>
        </div>
        
        <!-- EDF CONTACT LINKS -->

    </div>
    <!-- EOF Main Content -->
@endsection

@section('googleMap')
<!-- Google Map -->
    <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    scrollwheel: false,
					// How zoomed in you want the map to start at (always required)
                    zoom: 11,
                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(40.6700, -73.9400), // New York
                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"simplified"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"hue":"#f49935"}]},{"featureType":"road.highway","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"hue":"#fad959"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"road.local","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"hue":"#a1cdfc"},{"saturation":30},{"lightness":49}]}]
                };
                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
    
                var mapElement = document.getElementById('map');
                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);
                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.6700, -73.9400),
                    map: map,
                    title: 'BUXCORP'
                });
            }
      </script>
@endsection