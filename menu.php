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
                        <a href="index.php" class="nav-item nav-link">Home</a>
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

        
        
        <!-- Page Header Start -->
        <div class="page-header mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Food Menu</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Menu</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
   
        <!-- Food Start -->
        <div class="food">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="food-item">
                            <i class="flaticon-vegetable"></i>
                            
                            <?php
                            echo"<h2>Breakfast</h2>";
                            echo"<p>
                                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor auctor quis sem. 
                            </p>";
                            ?>
                            <a href="">View Menu</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="food-item">
                            <i class="flaticon-snack"></i>
                           
                            <?php
                            echo"<h2>Snacks</h2>";
                            echo"<p>
                                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor auctor quis sem. 
                            </p>";
                            ?>
                            <a href="">View Menu</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="food-item">
                            <i class="flaticon-cocktail"></i>
                            
                            <?php
                            echo"<h2>Drinks</h2>";
                            echo"<p>
                                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor auctor quis sem. 
                            </p>";
                            ?>
                            <a href="">View Menu</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="food-item">
                            <i class="flaticon-meat"></i>
                            <?php
                            echo"<h2>Lunch</h2>";
                            "<p>
                                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor auctor quis sem. 
                            </p>";
                            ?>
                            <a href="">View Menu</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="food-item">
                            <i class="flaticon-fast-food"></i>
                            
                            <?php
                            echo"<h2>Appetizers</h2>";
                            echo"<p>
                                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor auctor quis sem. 
                            </p>";
                            ?>
                            <a href="">View Menu</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="food-item">
                            <i class="flaticon-cooking"></i>
                            <?php
                            echo"<h2>Dessert</h2>";
                            echo"<p>
                                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non vulputa. Aliquam metus tortor auctor quis sem. 
                            </p>";
                            ?>

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
                    <?php
                    echo"<p>Food Menu</p>";
                    echo"<h2>Today's Menu</h2>";
                    ?>
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
                                            <?php
                                            echo"<h3><span>Egg Fried Rice</span> <strong>₱25.00</strong></h3>";
                                            echo"<p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>";
                                            ?>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/hotsilog.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <?php
                                            echo"<h3><span>Hotsilog</span> <strong>₱50.00</strong></h3>";
                                            echo"<p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>";
                                            ?>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/longsilog.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                           
                                           <?php
                                            echo"<h3><span>Longsilog</span> <strong>₱50.00</strong></h3>";
                                            echo"<p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>";
                                            ?>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/filipino-beef-tapa-tapsilog-1.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <?php
                                            echo"<h3><span>Tapsilog</span> <strong>₱65.00</strong></h3>";
                                            echo"<p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>";
                                            ?>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/tocilog.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <?php
                                            echo"<h3><span>Tocilog</span> <strong>₱100.00</strong></h3>";
                                            echo"<p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>";
                                            ?>
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
                                            <?php
                                            echo"<h3><span>Nova</span> <strong>₱15.00</strong></h3>";
                                            echo"<p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>";
                                            ?>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/snacks-piattos.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <?php
                                            echo"<h3><span>Piattos</span> <strong>₱15.00</strong></h3>";
                                            echo"<p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>";
                                            ?>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/snacks-rebisco.jpeg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <?php
                                            echo"<h3><span>Rebisco</span> <strong>₱7.00</strong></h3>";
                                            echo"<p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>";
                                            ?>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/snacks-skyflakes.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <?php
                                            echo
                                            "<h3><span>Skyflakes</span> <strong>₱25.00</strong></h3>";
                                            echo"<p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>";
                                            ?>
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
                                            <?php
                                            echo"<h3><span>Coca-cola</span> <strong>₱15.00</strong></h3>";
                                            "<p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>";
                                            ?>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/drinks-royal.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <?php
                                            echo"<h3><span>Royal</span> <strong>₱15.00</strong></h3>";
                                            echo"<p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>";
                                            ?>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/drinks-milktea.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <?php
                                            echo"<h3><span>Milk Tea</span> <strong>₱65.00</strong></h3>";
                                            echo"<p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>";
                                            ?>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/drinks-icedtea.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <?php
                                            echo"<h3><span>Iced Tea</span> <strong>₱25.00</strong></h3>";
                                            echo"<p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>";
                                            ?>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-img">
                                            <img src="img/sprite.jpg" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <?php
                                            echo"<h3><span>Sprite</span> <strong>₱15.00</strong></h3>";
                                            echo"<p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>";
                                            ?>
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
                                <?php
                                echo"<h3><span>Pork Adobo</span> <strong>₱50.00</strong></h3>";
                                echo"<p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>";
                                ?>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-img">
                                <img src="img/chicken curry.png" alt="Image">
                            </div>
                            <div class="menu-text">
                                <?php
                                echo"<h3><span>Chicken Curry</span> <strong>₱50.00</strong></h3>";
                                echo"<p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>";
                                ?>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-img">
                                <img src="img/chicken-nuggets-square.jpg" alt="Image">
                            </div>
                            <div class="menu-text">
                                <?php
                                echo"<h3><span>Chicken Nuggets</span> <strong>₱15.00</strong></h3>";
                                echo"<p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>";
                                ?>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-img">
                                <img src="img/linch beefsteak.jpg" alt="Image">
                            </div>
                            <div class="menu-text">
                                <?php
                                echo"<h3><span>Beef Steak</span> <strong>₱65.00</strong></h3>";
                                echo"<p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>";
                                ?>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-img">
                                <img src="img/caldereta.jpg" alt="Image">
                            </div>
                            <div class="menu-text">
                                <?php
                                echo"<h3><span>Caldereta</span> <strong>₱50.00</strong></h3>";
                                echo"<p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>";
                                ?>
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
                                <?php
                                echo"<h3><span>Lumpiang Shanghai</span> <strong>₱15.00</strong></h3>";
                                echo"<p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>";
                                ?>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-img">
                                <img src="img/potato mojos.jpg" alt="Image">
                            </div>
                            <div class="menu-text">
                                <?php
                                echo"<h3><span>Potato Mojos</span> <strong>₱15.00</strong></h3>";
                                echo"<p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>";
                                ?>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-img">
                                <img src="img/cheesy-dynamite.jpg" alt="Image">
                            </div>
                            <div class="menu-text">
                                <?php
                                echo"<h3><span>Cheesy Dynamite</span> <strong>₱15.00</strong></h3>";
                                echo"<p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>";
                                ?>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-img">
                                <img src="img/coconut-shrimp.jpg" alt="Image">
                            </div>
                            <div class="menu-text">
                                <?php
                                echo"<h3><span>Coconut Shrimp</span> <strong>₱25.00</strong></h3>";
                                echo"<p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>";
                                ?>
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
                                <?php
                                echo"<h3><span>Puto</span> <strong>₱15.00</strong></h3>";
                                "<p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>";
                                ?>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-img">
                                <img src="img/dessert-cassavacake.jpg" alt="Image">
                            </div>
                            <div class="menu-text">
                                <?php
                                echo"<h3><span>Cassava Cake</span> <strong>₱10.00</strong></h3>";
                                echo"<p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>";
                                ?>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-img">
                                <img src="img/dessert-halohalo.jpg" alt="Image">
                            </div>
                            <div class="menu-text">
                                <?php
                                echo"<h3><span>Halo Halo</span> <strong>₱25.00</strong></h3>";
                                echo"<p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>";
                                ?>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-img">
                                <img src="img/dessert-majablanca.jpg" alt="Image">
                            </div>
                            <div class="menu-text">
                                <?php
                                echo"<h3><span>Maja Blanca</span> <strong>₱25.00</strong></h3>";
                                echo"<p>Lorem ipsum dolor sit amet elit. Phasel nec preti facil</p>";
                                ?>
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
                                    <a href="">Terms of use</a>
                                    <a href="">Privacy policy</a>
                                    <a href="">Cookies</a>
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
