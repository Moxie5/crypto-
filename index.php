<?php
    ini_set('display_errors', 'On');
    include_once ('inc/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex, nofollow">

    <!-- Face Book -->
    <meta property="og:url" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />

    <!-- fontawesome icons -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

    <!-- Bootstrap css -->
    <link href="assets/bootstrap-4.3.1/css/bootstrap.css" rel="stylesheet">

    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/owl_carousel/assets/owl.carousel.min.css" />

    <!--  Global css -->
    <link rel="stylesheet" href="assets/css/animation.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Google fonts -->
    <link rel="stylesheet" href="assets/fonts/google-fonts.css">
    
    <!-- jquery -->
    <script src="assets/jQuery/jquery.min-3.6.0.js"></script>

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato|Poppins&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <title>CryptoCourses</title>
</head>
<body>
    <!-- TOP BAR -->
    <div class="top-bar d-flex align-items-center" id="home">
        <div class="container">
            <div class="row justify-content-between">
                <a class="navbar-brand" href="#"><span style="color: #14689b;">Crypto </span><span style="color: #e57b1b;">Courses</span></a>
                <?php if(isset($_SESSION['user_id'])) { echo'
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" data-disabled="true" aria-haspopup="true" aria-expanded="false">
                            Profile
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <a class="dropdown-item" href="/crypto-1/profiles/profile.php"><i class="fas fa-user"></i> Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="inc/logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        </div>
                    </div>';
                }else{echo'<button class="btn my-2 my-sm-0 btn-sm" data-toggle="modal" data-target="#login-register">LOG IN</button>';} ?>
            </div>
        </div>
    </div>
    <!-- END TOP BAR -->
    <!-- NAVIGATION -->
    <div class="navigation d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <nav>
                    <input class="menu-btn" type="checkbox" id="menu-btn" />
                    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
                    <ul class="menu">
                      <li><a href="#home">Home</a></li>
                      <li><a href="#about">About</a></li>
                      <li><a href="#service_course">Courses</a></li>
                      <li><a href="#contact_us">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- CAROUSEL -->
    <div id="carouselFull" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselFull" data-slide-to="0" class="active"></li>
            <li data-target="#carouselFull" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item custom-CarouselImg active">
          <img src="images/sentimental-analysis.jpg" class="d-block w-100" alt="web-hosts">
                <div class="carousel-caption d-none d-md-block animated slideInUp">
                    <div class="caption">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
          </div>
          <div class="carousel-item custom-CarouselImg">
          <img src="images/revolute-crypto.jpg" class="d-block w-100" alt="web-hosts">
            <div class="carousel-caption d-none d-md-block animated zoomIn slow">
                <div class="caption">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselFull" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselFull" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- MAIN CONTENT -->
    <div class="main">
        <!-- ABOUT -->
        <section class="about" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6">
                        <h3>About <span style="color: #14689b;">Us</span></h3>
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6">
                        <img src="images/learning_qa.jpg" alt="About">
                    </div>
                </div>
            </div>
        </section>
        <!-- COURSES -->
        <section class="courses d-flex align-items-center" id="service_course">
            <div class="container">
                <h2>Our <span style="color: #e57b1b;">Courses</span></h2>
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-6 col-lg-3 section_content_courses d-flex justify-content-center">
                        <div class="card wow fadeIn" style="width: 18rem;">
                            <img class="card-img-top" src="./images/course-1.webp" alt="course">
                            <div class="card-body">
                              <p class="card-text">Cryptocurrency E-Learning Courses</p>
                            </div>
                            <button type="button">View Details</button>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 section_content_courses d-flex justify-content-center">
                        <div class="card wow fadeIn" style="width: 18rem;">
                            <img class="card-img-top" src="./images/cryptocurrency-terms.webp" alt="course">
                            <div class="card-body">
                              <p class="card-text">Cryptocurrency E-Books & Glossaries</p>
                            </div>
                            <button type="button">View Details</button>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 section_content_courses d-flex justify-content-center">
                        <div class="card wow fadeIn" style="width: 18rem;">
                            <img class="card-img-top" src="./images/Forex-Trading.webp" alt="course">
                            <div class="card-body">
                              <p class="card-text">Forex Trading E-Learning Course</p>
                            </div>
                            <button type="button">View Details</button>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 section_content_courses d-flex justify-content-center">
                        <div class="card wow fadeIn" style="width: 18rem;">
                            <img class="card-img-top" src="./images/machinefeat.jpg" alt="course">
                            <div class="card-body">
                              <p class="card-text">Forex Tools</p>
                            </div>
                            <button type="button">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END COURSES -->
        <!-- COUNTER -->
        <section class="counter_students d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="counter" data-target="200">200</div>
                        <p>New Students</p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="counter" data-target="1000">1000</div>
                        <p>Satisfied Students</p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="counter" data-target="40">60</div>
                        <p>Waiting Students</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- TRADING -->
        <section class="trading_qa">
            <h3>TRADING FOR BEGINNERS Q&A SECTION</h3>
            <div class="container">
                <div class="row">
                    <div id="accordion" class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Question #1
                              </button>
                            </h5>
                          </div>
                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Question #2
                              </button>
                            </h5>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Question #3
                              </button>
                            </h5>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="telegram">
                            <img src="images/telegram-bg.png" alt="">
                            <div class="overlay">
                                <a href="#" class="telegram-link">JOIN OUR FREE TELEGRAM CHANNEL</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- TESTIMONIALS -->
        <section class="testimonials">
            <div class="container">
                <div class="row justify-content-start justify-content-lg-center">
                    <div id="customers-testimonials" class="owl-carousel col-12 col-md-6">
                        <div class="item">
                            <div class="testimonial-text">
                                <img class="img-circle" src="images/avatar1.jpg" alt="Client testimonial image">
                                <i class="fas fa-quote-left"></i>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio amet, rem
                                doloribus nam commodi sequi adipisci ex aliquam soluta.</p>
                                <div class="testimonial-name">John Michael</div>
                            </div>
                        </div>
                            <div class="item">
                                <div class="testimonial-text">
                                    <img class="img-circle" src="images/avatar2.jpg" alt="Client testimonial image">
                                    <i class="fas fa-quote-left"></i>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio amet, rem
                                    doloribus nam commodi sequi adipisci ex aliquam soluta.</p>
                                    <div class="testimonial-name">Isabella Tucker</div>
                                </div>
                            </div>
                        <div class="item">
                            <div class="testimonial-text">
                                <img class="img-circle" src="images/avatar4.jpg" alt="Client testimonial image">
                                <i class="fas fa-quote-left"></i>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio amet, rem
                                    doloribus nam commodi sequi adipisci ex aliquam soluta.</p>
                                    <div class="testimonial-name">Robert Jones</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-text">
                                <img class="img-circle" src="images/avatar3.jpg" alt="Client testimonial image">
                                <i class="fas fa-quote-left"></i>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio amet, rem
                                    doloribus nam commodi sequi adipisci ex aliquam soluta.</p>
                                    <div class="testimonial-name">Sindey Leonard</div>
                            </div>
                        </div>
                    </div>
                    <div class="student"><img src="images/student.png" alt=""></div>
                </div>
            </div>
        </section>
        <!-- TEAM -->
        <section class="our_team">
            <h1>OUR CRYPTO PROFESSORS</h1>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 d-flex justify-content-center">
                        <div class="card-member">
                            <div class="team-member">
                                <img src="images/avatar2.jpg" alt="Avatar" class="image" style="width:100%">
                                <div class="middle">
                                    <div class="text">EMILIA BELLA</div>
                                </div>
                            </div>
                            <div><p>10 YEARS EXPERIENCE </p> 
                                <p>Financial Advisor JP Morgan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 d-flex justify-content-center">
                        <div class="card-member">
                            <div class="team-member">
                                <img src="images/avatar3.jpg" alt="Avatar" class="image" style="width:100%">
                                <div class="middle">
                                    <div class="text">LINA MARZOUKI</div>
                                </div>
                            </div>
                            <div><p>5 YEARS EXPERIENCE</p> 
                                <p>NYU Professor Global Markets</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 d-flex justify-content-center">
                        <div class="card-member">
                            <div class="team-member">
                                <img src="images/avatar4.jpg" alt="Avatar" class="image" style="width:100%">
                                <div class="middle">
                                    <div class="text">ANTONIO CONTE</div>
                                </div>
                            </div>
                            <div><p>4 years experience</p> 
                                <p>Cryptocurrency Expert
                                    Blockchain Council</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CONTACT US -->
        <section class="contacts-section" id="contact_us">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="contacts col-12 col-sm-12 wow fadeIn" data-wow-duration="2s">
                        <h3>For any general inquiries, please fill in the contact form:</h3>
                        <div class="alert alert-danger" id="status" style="max-width:350px; margin:auto; display:none;" role="alert"></div>
                        <div class="alert alert-success" id="status_success" style="max-width:350px; margin:auto; display:none;" role="alert"></div>
                        <form id="contact_form" method="post">
                            <input type="text" name="username" id="username" placeholder="Full Name *">
                            <input type="email" name="email" id="email" placeholder="E-mail *">
                            <input type="text" name="phone" id="phone" placeholder="Phone">
                            <input type="text" name="subject" id="subject" placeholder="Subject *">
                            <textarea name="message" id="message" cols="75" rows="5" placeholder="Message *"></textarea>
                            <button type="button" name="button" id="inquiries" value="Send">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CONTACT US -->
    </div>
    <!-- END MAIN -->
    <!-- COPYRIGHT -->
    <div class="copyright d-flex align-items-center justify-content-center">
        Copyright &copy; 2021 Crypto Courses. All Right Reserved.
    </div>

    <!-- Modal -->
    <div class="modal fade" id="login-register" tabindex="-1" role="dialog" aria-labelledby="login-registerLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="login-registerLabel">Login/Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger statusMsg" style="display:none;" role="alert"></div>
                <div class="alert alert-success statusMsgsuccess" style="display:none;" role="alert"></div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="rehister" aria-selected="false">Register</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <form id="login_form">
                            <div class="form-group">
                                <label for="inputEmailLog">Email</label>
                                <input type="email" class="form-control" name="email_log" id="inputEmailLog" placeholder="my@email.com">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Password</label>
                                <input type="password" class="form-control" name="password_log" id="inputPasswordLog" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary" name="sign_in" id="sign_in">Sign in</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                        <form id="register_form">
                            <div class="form-group">
                                <label for="inputName">Full name</label>
                                <input type="text" class="form-control" name="user_name" id="inputName" placeholder="John Smith">
                            </div>
                            <div class="form-group">
                                <label for="inputPhone">Phone</label>
                                <input type="text" class="form-control" name="user_phone" id="inputPhone" placeholder="+359 865 659 689">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" name="user_email" id="inputEmail" placeholder="my@email.com">
                            </div>
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input type="text" class="form-control" name="country" id="country" placeholder="Country">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Password</label>
                                <input type="password" class="form-control" name="password_reg" id="inputPasswordReg" placeholder="Password">
                            </div>
                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                  I accept terms & conditions
                                </label>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="sign_up" id="sign_up">Sign up</button>
                        </form>
                    </div>
                  </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
    <!-- SCRIPTS -->
    <!-- Bootstrap js -->
    <!-- <script src="assets/bootstrap-4.3.1/js/bootstrap.min.js"></script> -->
    <script src="assets/bootstrap-4.3.1/js/bootstrap.bundle.min.js"></script>
    <!-- Custom js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="js/script.js" type="text/javascript"></script>
    <script src="js/form_validation.js" type="text/javascript"></script>
    <script src="assets/js/onepagenav.js"></script>
    <script src="assets/js/wow.js"></script>
    <script>new WOW().init();</script>
    <script src="assets/owl_carousel/owl.carousel.min.js" type="text/javascript"></script>
    <script>
        //  TESTIMONIALS CAROUSEL HOOK
        $('#customers-testimonials').owlCarousel({
            loop: true,
            center: true,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 8000,
            smartSpeed: 450,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                992: {
                    items: 1
                }
            }
        });
        $('.counter').counterUp({
            delay: 10,
            time: 600
        });
    </script>
</body>
</html>