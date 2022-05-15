<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>MSC's Online Canteen</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">


        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand"><img src="img/msc-logo.png"></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="feature.php" class="nav-item nav-link">Feature</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Menu</a>
                            <div class="dropdown-menu">
                                <a href="breakfast.php" class="dropdown-item">Breakfast</a>
                                <a href="snacks.php" class="dropdown-item">Snacks</a>
                                <a href="lunch.php" class="dropdown-item">Lunch</a>
                                <a href="appetizers.php" class="dropdown-item">Appetizers</a>
                                <a href="drinks.php" class="dropdown-item">Drinks</a>
                                <a href="dessert.php" class="dropdown-item">Dessert</a>
                            </div>
                            </div>
                            
                        <a href="reservation.php" class="nav-item nav-link">Reservation</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/msc.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <?php

                            echo"<h1>WELCOME TO <span>MSC's </span>ONLINE CANTEEN</h1>";
                            echo "<p>
                                Lorem ipsum dolor sit amet elit. Phasellus ut mollis mauris. Vivamus egestas eleifend dui ac consequat at lectus in malesuada
                            </p>";
                         ?>
                            <div class="carousel-btn">
                                <a class="btn custom-btn" href="">View Menu</a>
                                <a class="btn custom-btn" href="">Reserve a Table</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1> Order your <span> Snacks</span> Online</h1>
                            <p>
                                Morbi sagittis turpis id suscipit feugiat. Suspendisse eu augue urna. Morbi sagittis, orci sodales varius fermentum, tortor
                            </p>
                            <div class="carousel-btn">
                                <a class="btn custom-btn" href="">View Menu</a>
                                <a class="btn custom-btn" href="">Reserve Table</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel2.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Fastest Order <span>Delivery</span></h1>
                            <p>
                                Sed ultrices, est eget feugiat accumsan, dui nibh egestas tortor, ut rhoncus nibh ligula euismod quam. Proin pellentesque odio
                            </p>
                            <div class="carousel-btn">
                                <a class="btn custom-btn" href="">View Menu</a>
                                <a class="btn custom-btn" href="">Reserve Table</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
        
        
        <!-- Booking Start -->
        <div class="booking">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="booking-content">
                            <div class="section-header">
                                <p>Reserve A Table</p>
                                <h2>Reserve Your Table For You & Your Friends During Meal Hours</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="booking-form">
                            <form>
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Name" required="required" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="far fa-user"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="email" class="form-control" placeholder="Email" required="required" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="far fa-envelope"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="ID Number" required="required" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"> <i class="fa-light fa-id-card"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group date" id="date" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" placeholder="Date" data-target="#date" data-toggle="datetimepicker"/>
                                        <div class="input-group-append" data-target="#date" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group time" id="time" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" placeholder="Time" data-target="#time" data-toggle="datetimepicker"/>
                                        <div class="input-group-append" data-target="#time" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group">
                                        <select class="custom-select form-control">
                                            <option selected>Guest</option>
                                            <option value="1">1 Guest</option>
                                            <option value="2">2 Guest</option>
                                            <option value="3">3 Guest</option>
                                            <option value="4">4 Guest</option>
                                            <option value="5">5 Guest</option>
                                            <option value="6">6 Guest</option>
                                            <option value="7">7 Guest</option>
                                            <option value="8">8 Guest</option>
                                            <option value="9">9 Guest</option>
                                            <option value="10">10 Guest</option>
                                        </select>
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-chevron-down"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn custom-btn" type="submit" href="reservation.php">Reserve Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/msc.png" alt="Image">
                            <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                                <span></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-header">
                                <p>About Us</p>
                            </div>
                            <div class="about-text">
                              <p>MSC Canteen Online Ordering System is a program that speeds up the ordering process. Students are no longer required to stand in line. Students also save time and energy by not having to go down stairs to learn about the foods available at the canteen. This website has a user-friendly design as well. To provide users with a good experience, the developers made the interface as simple as possible.</p>
                              <p>
                                    This web application's goal is to provide a new way to order dishes at the canteen. Its purpose is to serve as the MSC canteen's e-commerce website.
                                </p>

                                
                                <a class="btn custom-btn" href="reservation.php">Reserve A Table</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        
        
        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Video Modal End -->
        
        
        <!-- Feature Start -->
        <div class="feature">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="section-header">

                            <h2>Our Key Features</h2>
                        </div>
                        <div class="feature-text">
                            <div class="feature-img">
                                <div class="row">
                                    <div class="col-6">
                                        <img src="img/feature-1.jpg" alt="Image">
                                    </div>
                                    <div class="col-6">
                                        <img src="img/feature-2.jpg" alt="Image">
                                    </div>
                                    <div class="col-6">
                                        <img src="img/feature-3.jpg" alt="Image">
                                    </div>
                                    <div class="col-6">
                                        <img src="img/feature-4.jpg" alt="Image">
                                    </div>
                                </div>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet consec adipis elit. Phasel nec preti mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor, auctor id gravida condime, viverra quis sem. Curabit non nisl nec nisi sceleri maximus 
                            </p>
                            <a class="btn custom-btn" href="">Reserve A Table</a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-cooking"></i>
                                    <h3>Unique Menu</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-vegetable"></i>
                                    <h3>Natural ingredients</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-medal"></i>
                                    <h3>Best quality products</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-meat"></i>
                                    <h3>Fresh vegetables & Meet</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-courier"></i>
                                    <h3>Fastest room delivery</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-fruits-and-vegetables"></i>
                                    <h3>Ground beef & Low fat</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->
        
        
        <!-- Food Start -->
        <div class="food">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="food-item">
                            <i class="flaticon-vegetable"></i>
                            <h2>Breakfast</h2>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor auctor quis sem. 
                            </p>
                            <a href="">View Menu</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="food-item">
                            <i class="flaticon-snack"></i>
                            <h2>Snacks</h2>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor auctor quis sem. 
                            </p>
                            <a href="">View Menu</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="food-item">
                            <i class="flaticon-cocktail"></i>
                            <h2>Drinks</h2>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor auctor quis sem. 
                            </p>
                            <a href="">View Menu</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="food-item">
                            <i class="flaticon-meat"></i>
                            <h2>Lunch</h2>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor auctor quis sem. 
                            </p>
                            <a href="">View Menu</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="food-item">
                            <i class="flaticon-fast-food"></i>
                            <h2>Appetizers</h2>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor auctor quis sem. 
                            </p>
                            <a href="">View Menu</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="food-item">
                            <i class="flaticon-cooking"></i>
                            <h2>Dessert</h2>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor auctor quis sem. 
                            </p>
                            <a href="">View Menu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Food End -->
        
        
          <!-- Menu Start -->
          <div class="menu">
            <div class="container">
                <div class="section-header text-center">
                    <p>Food Menu</p>
                    <h2>Today's Menu</h2>
                </div>
                <div class="menu-tab">
                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#breakfast">Breakfast</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#snacks">Snacks</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#drinks">Drinks</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#lunch">Lunch</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#appetizers">Appetizers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#dessert">Dessert</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="breakfast" class="container tab-pane active">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/egg-fried-rice.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Egg Fried Rice</span> <strong>₱25.00</strong></h3>
                                            <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/hotsilog.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Hotsilog</span> <strong>₱50.00</strong></h3>
                                            <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/longsilog.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Longsilog</span> <strong>₱50.00</strong></h3>
                                            <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/filipino-beef-tapa-tapsilog-1.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Tapsilog</span> <strong>₱65.00</strong></h3>
                                            <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/tocilog.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Tocilog</span> <strong>₱100.00</strong></h3>
                                            <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-none d-lg-block">
                                    <img src="img/egg-fried-rice.jpg" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div id="snacks" class="container tab-pane fade">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/snacks-nova.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Nova</span> <strong>₱15.00</strong></h3>
                                            <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/snacks-piattos.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Piattos</span> <strong>₱15.00</strong></h3>
                                            <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/snacks-rebisco.jpeg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Rebisco</span> <strong>₱7.00</strong></h3>
                                            <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/snacks-skyflakes.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Skyflakes</span> <strong>₱25.00</strong></h3>
                                            <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-none d-lg-block">
                                    <img src="img/roller-coaster.jpg" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div id="drinks" class="container tab-pane fade">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/drinks-cocacola.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Coca-cola</span> <strong>₱15.00</strong></h3>
                                            <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/drinks-royal.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Royal</span> <strong>₱15.00</strong></h3>
                                            <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/drinks-milktea.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Milk Tea</span> <strong>₱65.00</strong></h3>
                                            <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/drinks-icedtea.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Iced Tea</span> <strong>₱25.00</strong></h3>
                                            <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/sprite.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>Sprite</span> <strong>₱15.00</strong></h3>
                                            <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-none d-lg-block">
                                    <img src="img/drinks-cocacola.jpg" alt="Image">
                                </div>  
                            </div>
                        </div>
            
            <div id="lunch" class="container tab-pane fade">
                <div class="row">
                    <div class="col-lg-7 col-md-12">
                        <div class="menu-item">
                            <div class="menu-img">
                                <img src="img/adobo.jpg" alt="Image">
                            </div>
                            <div class="menu-text">
                                <h3><span>Pork Adobo</span> <strong>₱50.00</strong></h3>
                                <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-img">
                                <img src="img/chicken curry.png" alt="Image">
                            </div>
                            <div class="menu-text">
                                <h3><span>Chicken Curry</span> <strong>₱50.00</strong></h3>
                                <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-img">
                                <img src="img/chicken-nuggets-square.jpg" alt="Image">
                            </div>
                            <div class="menu-text">
                                <h3><span>Chicken Nuggets</span> <strong>₱15.00</strong></h3>
                                <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-img">
                                <img src="img/linch beefsteak.jpg" alt="Image">
                            </div>
                            <div class="menu-text">
                                <h3><span>Beef Steak</span> <strong>₱65.00</strong></h3>
                                <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-img">
                                <img src="img/caldereta.jpg" alt="Image">
                            </div>
                            <div class="menu-text">
                                <h3><span>Caldereta</span> <strong>₱50.00</strong></h3>
                                <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <img src="img/adobo.jpg" alt="Image">
                    </div>
                </div>
            </div>
            <div id="appetizers" class="container tab-pane fade" >
                <div class="row">
                    <div class="col-lg-7 col-md-12">
                        <div class="menu-item">
                            <div class="menu-img">
                                <img src="img/app-lumpia.jpg" alt="Image">
                            </div>
                            <div class="menu-text">
                                <h3><span>Lumpiang Shanghai</span> <strong>₱15.00</strong></h3>
                                <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-img">
                                <img src="img/potato mojos.jpg" alt="Image">
                            </div>
                            <div class="menu-text">
                                <h3><span>Potato Mojos</span> <strong>₱15.00</strong></h3>
                                <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-img">
                                <img src="img/cheesy-dynamite.jpg" alt="Image">
                            </div>
                            <div class="menu-text">
                                <h3><span>Cheesy Dynamite</span> <strong>₱15.00</strong></h3>
                                <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-img">
                                <img src="img/coconut-shrimp.jpg" alt="Image">
                            </div>
                            <div class="menu-text">
                                <h3><span>Coconut Shrimp</span> <strong>₱25.00</strong></h3>
                                <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <img src="img/potato mojos.jpg" alt="Image">
                    </div>
                </div>
            </div>
            <div id="dessert" class="container tab-pane fade">
                <div class="row">
                    <div class="col-lg-7 col-md-12">
                        <div class="menu-item">
                            <div class="menu-img">
                                <img src="img/snacks-puto.jpg" alt="Image">
                            </div>
                            <div class="menu-text">
                                <h3><span>Puto</span> <strong>₱15.00</strong></h3>
                                <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-img">
                                <img src="img/dessert-cassavacake.jpg" alt="Image">
                            </div>
                            <div class="menu-text">
                                <h3><span>Cassava Cake</span> <strong>₱10.00</strong></h3>
                                <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-img">
                                <img src="img/dessert-halohalo.jpg" alt="Image">
                            </div>
                            <div class="menu-text">
                                <h3><span>Halo Halo</span> <strong>₱25.00</strong></h3>
                                <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-img">
                                <img src="img/dessert-majablanca.jpg" alt="Image">
                            </div>
                            <div class="menu-text">
                                <h3><span>Maja Blanca</span> <strong>₱25.00</strong></h3>
                                <p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <img src="img/dessert-halohalo.jpg" alt="Image">
                    </div>  

                </div>
            </div>
        </div>
    </div>
</div>
</div>
        <!-- Menu End -->
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Contact Us</p>
                    <h2>Contact For Any Query</h2>
                </div>
                <div class="row align-items-center contact-information">
                    <div class="col-md-6 col-lg-3">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Address</h3>
                                <p>Tanza, Boac, Marinduque</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Call Us</h3>
                                <p>09-1045-321-21</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Email Us</h3>
                                <p>msc@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-share"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Follow Us</h3>
                                <div class="contact-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row contact-form">
                    <div class="col-md-6">
                        <iframe src="https://maps.google.com/maps?q=Marinduque%20State%20College&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn custom-btn" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-contact">
                                    <h2>Our Address</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>Tanza, Boac, Marinduque</p>
                                    <p><i class="fa fa-phone-alt"></i>09-1045-321-21</p>
                                    <p><i class="fa fa-envelope"></i>msc@gmail.com</p>
                                    <div class="footer-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-link">
                                    <h2>Quick Links</h2>
                                    <a href="terms.php">Terms of use</a>
                                    <a href="privacypolicy.php">Privacy policy</a>
                                    <a href="cookies.php">Cookies</a>
                                    <a href="">Help</a>
                                    <a href="">FQAs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
                            <p>
                                Lorem ipsum dolor sit amet elit. Quisque eu lectus a leo dictum nec non quam. Tortor eu placerat rhoncus, lorem quam iaculis felis, sed lacus neque id eros.
                            </p>
                            <div class="form">
                                <input class="form-control" placeholder="Email goes here">
                                <button class="btn custom-btn">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>Copyright &copy; <a href="#">MSC's Online Canteen</a>, All Right Reserved.</p>
                    <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
