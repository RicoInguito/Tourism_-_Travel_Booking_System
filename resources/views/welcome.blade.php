<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Traveller's</title>

        <!-- Bootstrap core CSS -->
        <link href="asset/css/bootstrap.css" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link href="asset/css/style.css" rel="stylesheet">
        <link href="asset/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

    </head>

    <body>

        <!-- Side Menu -->
        <a id="menu-toggle" href="asset/#" class="btn btn-primary btn-lg toggle"><i class="fa fa-bars"></i></a>
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li>
                    <a id="menu-close" href="asset/#" class="btn btn-default btn-lg pull-right toggle">
                        <i class="fa fa-times"></i>
                    </a>
                </li>
                <li class="sidebar-brand">
                    <a href="asset/#top">Traveller's</a>
                    <hr>
                </li>
                <li>
                    <a href="asset/#top">Home</a>
                </li>
                <li>
                    <a href="asset/#about">About</a>
                </li>
                <li>
                    <a href="asset/#services">Services</a>
                </li>
                <li>
                    <a href="asset/#places">Places</a>
                </li>
                <li>
                    <a href="asset/#contact">Contact</a>
                </li>
                <!-- <li>
                    <a href="{{route('register')}}">Register</a>
                </li> -->
            </ul>
        </div>
        <!-- /Side Menu -->

        <!-- Full Page Image Header Area -->
        <div id="top" class="header">
            <div class="vert-text parallax">
                <h1 class="header-text">Explore the Beauty of the Philippines!!</h1>
                <h3 class="header-text">
                    <em class="header-text">By discovering the unparalleled beauty of the Philippines.</em>
                </h3><br />
                @if(auth()->user())
                @else
                <a href="/login" class="btn header-btn">Login</a>
                <br/>
                @endif
               
                <a href="asset/#about"><img src="asset/img/direction.png" class="space" alt="Direction"></a>
            </div>
        </div>
        <!-- /Full Page Image Header Area -->

        <!-- Intro -->
        <div id="about">
            <div class="light-wrapper">
                <div class="container inner">
                    <div class="row">
                        <div class="text-center">
                            <h2 class="main-title">About our company</h2>
                            <hr>
                        </div>
                        <div class="divide50"></div>
                        <div class="col-sm-4">
                          <figure><img src="asset/img/office.jpg" alt="" style="width: 100%;"></figure>
                        </div>
                        <div class="col-sm-8">
                          <h4>Our Working Place</h4>
                          <p>Our travel booking system is designed to make your travel experience effortless and enjoyable. We provide a user-friendly platform where you can easily search for flights, accommodations, and transportation options all in one place. Our system allows you to compare prices, select the best deals, and make secure bookings with just a few clicks. From initial planning to final confirmation, we streamline the entire process, offering real-time updates and support to ensure your journey is smooth and hassle-free. Whether you're traveling for business or leisure, our system is here to help you manage every detail with ease and convenience.</p>
                        </div>
                      </div> 
                        </div>
                            
                          </div>
                          <!-- /.services-2 --> 
                          
                        </div>
                        <!-- /.col --> 
                        
                      </div>
                      <!-- /.row --> 
                      
                    </div>
                    <!-- /.container --> 
                  </div>
                  <!-- /.light-wrapper -->
                </div>
        <!-- /Intro -->

        <!-- Services -->
        <div id="services" class="services">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 text-center">
                        <h2 class="main-title">Our Services</h2>
                        <hr>
                    </div>
                </div>
                <div class="divide50"></div>
                <div class="row">
                    <div class="col-md-3 text-center">
                        <div class="service-item">
                            <i class="service-icon fa fa-plane"></i>
                            <h4 class="service-title">Great Transport</h4>
                            <p class="service-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni voluptatum et, alias vero, reprehenderit doloremque neque dignissimos voluptas.</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="service-item">
                            <i class="service-icon fa fa-usd"></i>
                            <h4 class="service-title">Not Expensive</h4>
                            <p class="service-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni voluptatum et, alias vero, reprehenderit doloremque neque dignissimos voluptas.</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="service-item">
                            <i class="service-icon fa fa-cutlery"></i>
                            <h4 class="service-title">Delicious Food</h4>
                            <p class="service-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni voluptatum et, alias vero, reprehenderit doloremque neque dignissimos voluptas.</p>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="service-item">
                            <i class="service-icon fa fa-camera"></i>
                            <h4 class="service-title">Best Photographer's</h4>
                            <p class="service-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni voluptatum et, alias vero, reprehenderit doloremque neque dignissimos voluptas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Services -->

        <!-- Callout -->
        <div class="callout">
            <div class="vert-text">
                <h1 class="main-title parallax2">Your Travellers Guide</h1>
            </div>
        </div>
        <!-- /Callout -->

        <!-- Portfolio -->
        <div id="places" class="places">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 text-center">
                        <h2 class="main-title">Our visited place</h2>
                        <hr>
                    </div>
                </div>
            </div>  
            <div class="divide50"></div>  
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="asset/img/Luzon1.jpg" alt="luzon1" class="img-responsive center-block">
                                <figcaption>
                                    <h2>Luzon</h2>
                                    <p class="icon-links">
                                        <a href="asset/#"><i class="fa fa-heart-o"></i></a>
                                        <a href="asset/#"><i class="fa fa-eye"></i></a>
                                        <a href="asset/#"><i class="fa fa-bookmark-o"></i></a>
                                    </p>
                                    <p class="description">
                                    Luzon is home to some of the Philippines' most stunning tourist spots, from the majestic rice terraces of Banaue to the pristine beaches of Palawan, offering diverse landscapes and rich cultural experiences that captivate every traveler.
                                    </p>
                                </figcaption>           
                            </figure>
                        </div>
                    </div>
                    <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="asset/img/Luzon2.jpg" alt="luzon2" class="img-responsive center-block">
                                <figcaption>
                                    <h2>Luzon</h2>
                                    <p class="icon-links">
                                        <a href="asset/#"><i class="fa fa-heart-o"></i></a>
                                        <a href="asset/#"><i class="fa fa-eye"></i></a>
                                        <a href="asset/#"><i class="fa fa-bookmark-o"></i></a>
                                    </p>
                                    <p class="description">
                                    Luzon is home to some of the Philippines' most stunning tourist spots, from the majestic rice terraces of Banaue to the pristine beaches of Palawan, offering diverse landscapes and rich cultural experiences that captivate every traveler.
                                    </p>
                                </figcaption>           
                            </figure>
                        </div>
                    </div>
                <div class= "row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="asset/img/Visayas1.jpg" alt="visayas" class="img-responsive center-block">
                                <figcaption>
                                    <h2>Visayas</h2>
                                    <p class="icon-links">
                                        <a href="asset/#"><i class="fa fa-heart-o"></i></a>
                                        <a href="asset/#"><i class="fa fa-eye"></i></a>
                                        <a href="asset/#"><i class="fa fa-bookmark-o"></i></a>
                                    </p>
                                    <p class="description">
                                       The Visayas region boasts a wealth of breathtaking tourist spots, from the crystal-clear waters of Boracay's beaches to the historic streets of Cebu, providing visitors with a perfect blend of natural beauty and cultural heritage.
                                    </p>
                                </figcaption>           
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="asset/img/Visayas2.jpg" alt="visayas" class="img-responsive center-block">
                                <figcaption>
                                    <h2>Visayas</h2>
                                    <p class="icon-links">
                                        <a href="asset/#"><i class="fa fa-heart-o"></i></a>
                                        <a href="asset/#"><i class="fa fa-eye"></i></a>
                                        <a href="asset/#"><i class="fa fa-bookmark-o"></i></a>
                                    </p>
                                    <p class="description">
                                        The Visayas region boasts a wealth of breathtaking tourist spots, from the crystal-clear waters of Boracay's beaches to the historic streets of Cebu, providing visitors with a perfect blend of natural beauty and cultural heritage.
                                    </p>
                                </figcaption>           
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="asset/img/Mindanao1.jpg" alt="mindanao" class="img-responsive center-block">
                                <figcaption>
                                    <h2>Mindanao</h2>
                                    <p class="icon-links">
                                        <a href="asset/#"><i class="fa fa-heart-o"></i></a>
                                        <a href="asset/#"><i class="fa fa-eye"></i></a>
                                        <a href="asset/#"><i class="fa fa-bookmark-o"></i></a>
                                    </p>
                                    <p class="description">
                                        Mindanao is a treasure trove of tourist spots, featuring the awe-inspiring Mount Apo, the vibrant cultural scenes of Davao, and the pristine shores of Siargao, making it a paradise for adventurers and nature lovers alike.
                                    </p>
                                </figcaption>           
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="grid center-block">
                            <figure class="effect-zoe">
                                <img src="asset/img/Mindanao2.jpg" alt="mindanao" class="img-responsive center-block">
                                <figcaption>
                                    <h2>Mindanao</h2>
                                    <p class="icon-links">
                                        <a href="asset/#"><i class="fa fa-heart-o"></i></a>
                                        <a href="asset/#"><i class="fa fa-eye"></i></a>
                                        <a href="asset/#"><i class="fa fa-bookmark-o"></i></a>
                                    </p>
                                    <p class="description">
                                      Mindanao is a treasure trove of tourist spots, featuring the awe-inspiring Mount Apo, the vibrant cultural scenes of Davao, and the pristine shores of Siargao, making it a paradise for adventurers and nature lovers alike.
                                    </p>
                                </figcaption>           
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /Portfolio -->

        <!-- Call to Action -->
        <div class="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <h3>We provide online booking</h3>
                        <a href="asset/#" class="btn booking-btn text-center" data-toggle="modal" data-target="#booking">Click for Booking !</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Call to Action -->

        <!-- Contact Section -->
        <div id="contact" class="container parallax">
            <div class="col-md-4 col-md-offset-4 text-center">
                <h2 class="main-title">Contact us</h2>
                <hr>
                <div class="divide50"></div>
            </div>
            <!-- Contact Inner -->
            <div class="inner contact">
                <!-- Form Area -->
                <div class="contact-form">
                    <!-- Form -->
                    <form id="contact-us" method="post" action="#">
                        <!-- Left Inputs -->
                        <div class="col-xs-6 col-xs-12 animated" data-animation="fadeInLeft" data-animation-delay="300">
                            <!-- Name -->
                            <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
                            <!-- Email -->
                            <input type="email" name="mail" id="mail" required="required" class="form" placeholder="Email" />
                            <!-- Subject -->
                            <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject" />
                        </div><!-- End Left Inputs -->
                        <!-- Right Inputs -->
                        <div class="col-xs-6 col-xs-12 animated" data-animation="fadeInRight" data-animation-delay="400">
                            <!-- Message -->
                            <textarea name="message" id="message" class="form textarea"  placeholder="Message"></textarea>
                        </div><!-- End Right Inputs -->
                        <!-- Bottom Submit -->
                        <div class="relative fullwidth col-xs-12">
                            <!-- Send Button -->
                            <button type="submit" id="submit" name="submit" class="form-btn semibold">Send Message</button> 
                        </div><!-- End Bottom Submit -->
                        <!-- Clear -->
                        <div class="clear"></div>
                    </form>

                    <!-- Your Mail Message -->
                    <div class="mail-message-area">
                        <!-- Message -->
                        <div class="alert gray-bg mail-message not-visible-message">
                            <strong>Thank You !</strong> Your email has been delivered.
                        </div>
                    </div>

                </div><!-- End Contact Form Area -->
            </div><!-- End Inner -->
        </div><!-- End Contact Section -->
        
        <div class="map">
    <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2799021186!2d-74.25987568728931!3d40.69767006425317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c250b1f0a42191%3A0x6b7cb717f42e0e71!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sph!4v1634516612940!5m2!1sen!2sph"></iframe>
</div>
        <!-- /Map -->

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/PhilippineTravelJP" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://x.com/philippines" target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.itsmorefuninthephilippines.com/" target="_blank">
                                <i class="fa fa-dribbble"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.pinterest.com" target="_blank">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </li>
                        </ul>
                        <hr>
                        <p>Copyright &copy;</a>  2014</p>
                        <div class="top-scroll">
                            <a href="asset/#top"><i class="fa fa-arrow-circle-up scroll"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /Footer -->

        <!-- begin:booking -->
        <div class="modal fade" id="booking" tabindex="-1" role="dialog" aria-labelledby="booking" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Online Booking Form</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form">
                            <div class="form-group">
                                <label for="emailAddress">Email address</label>
                                <input id="emailAddress" type="email" class="form-control input-lg" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input id="password" type="password" class="form-control input-lg" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="island">Which island do you want to travel?</label>
                                <select class="form-control" id="island">
                                    <option>Luzon</option>
                                    <option>Visayas</option>
                                    <option>Mindanao</option>
                                </select>
                            </div>
                            
                        </form>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn confirm-btn" value="Confirm">
                    </div>
                </div>
            </div>
        </div>
        <!-- end:booking -->

        <!-- JavaScript -->
        <script src="asset/js/jquery-1.10.2.js"></script>
        <script src="asset/js/bootstrap.js"></script>
        <script type="text/javascript" src="asset/js/jquery.parallax-1.1.3.js"></script>

        <!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
        <script>
        $("#menu-close").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
        </script>
        <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
        </script>
        <script>
        $(function() {
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
        </script>

        <!-- modal -->

        <script>

            $('.modal').on('shown.bs.modal', function () {
                var curModal = this;
                $('.modal').each(function(){
                    if(this != curModal){
                        $(this).modal('hide');
                    }
                });
            });

        </script>

    </body>
</html>