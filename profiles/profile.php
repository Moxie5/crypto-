<?php   
    include_once('../inc/config.php');
    if (!isset($_SESSION['user_id'])) {
        header('location: /crypto-1');
    }
    $user = get_user($_SESSION['user_id']);
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
    <link href="../assets/bootstrap-4.3.1/css/bootstrap.css" rel="stylesheet">

    <!-- owl carousel -->
    <link rel="stylesheet" href="../assets/owl_carousel/assets/owl.carousel.min.css" />

    <!--  Global css -->
    <link rel="stylesheet" href="../assets/css/animation.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/profile.css">

    <!-- Google fonts -->
    <link rel="stylesheet" href="../assets/fonts/google-fonts.css">
    
    <!-- jquery -->
    <script src="../assets/jQuery/jquery.min-3.6.0.js"></script>

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato|Poppins&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <title>CryptoCourses</title>
</head>
<body>
    <!-- TOP BAR -->
    <div class="top-bar d-flex align-items-center">
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
                            <a class="dropdown-item" href="../inc/logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
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
                      <li><a href="http://localhost/crypto-1/#home">Home</a></li>
                      <li><a href="http://localhost/crypto-1/#about">About</a></li>
                      <li><a href="http://localhost/crypto-1/#service_course">Courses</a></li>
                      <li><a href="http://localhost/crypto-1/#contact_us">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- MAIN CONTENT -->
    <div class="main">
        <section class="profile">
        <div class="container">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
								<div class="mt-3">
									<h4>John Doe</h4>
									<p class="text-secondary mb-1">Full Stack Developer</p>
									<p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
									<button class="btn btn-outline-primary">Message</button>
								</div>
							</div>
							<hr class="my-4">
							<ul class="list-group list-group-flush">
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                        Website
                                    </h6>
									<span class="text-secondary">https://bootdey.com</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github me-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                                        Github
                                    </h6>
									<span class="text-secondary">bootdey</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter me-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                                        Twitter
                                    </h6>
									<span class="text-secondary">@bootdey</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram me-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                                        Instagram
                                    </h6>
									<span class="text-secondary">bootdey</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                                        Facebook
                                    </h6>
									<span class="text-secondary">bootdey</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="card">
						<div class="card-body">
                            <form action="" method="POST" id="profile_update">
                                <p id="status"></p>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="<?php echo $user['user_name'];?>" id="username" name="full_name" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="email" class="form-control" value="<?php echo $user['user_email'];?>" id="email" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="<?php echo $user['user_phone'];?>" id="phone" name="phone" placeholder="phone">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Country</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="<?php echo $user['user_country'];?>" id="country" name="country" placeholder="Country">
                                    </div>
                                </div>
                            </form>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Password</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <div class="row mb-3" id="edit_password">
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" value="<?php echo $user['user_password'];?>" placeholder="Password" disabled>
                                            </div>
                                            <div class="col-sm-3 text-secondary">
                                                <span id="edit">Edit</span>
                                            </div>
                                        </div>
                                        <form method="POST" id="change_password_form">
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Old password</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="password" class="form-control" id="old_password" name="old_password">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">New password</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="password" class="form-control" id="new_password" name="new_password">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6"></div>
                                                <div class="col-sm-6 text-secondary">
                                                    <input type="submit" name="change_password" class="btn btn-sm btn-primary px-4" id="change_password" value="Change">
                                                    <input type="button" class="btn btn-sm btn-primary px-4" id="close" value="Cancel">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="submit" name="submit" class="btn btn-primary px-4" id="save_changes" value="Update">
                                    </div>
                                </div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<h5 class="d-flex align-items-center mb-3">Project Status</h5>
									<!-- <p>Web Design</p>
									<div class="progress mb-3" style="height: 5px">
										<div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<p>Website Markup</p>
									<div class="progress mb-3" style="height: 5px">
										<div class="progress-bar bg-danger" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<p>One Page</p>
									<div class="progress mb-3" style="height: 5px">
										<div class="progress-bar bg-success" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<p>Mobile Template</p>
									<div class="progress mb-3" style="height: 5px">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<p>Backend API</p>
									<div class="progress" style="height: 5px">
										<div class="progress-bar bg-info" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
									</div> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
        </section>
    </div>
    <!-- COPYRIGHT -->
    <div class="copyright d-flex align-items-center justify-content-center">
        Copyright &copy; 2021 Crypto Courses. All Right Reserved.
    </div>
    <!-- SCRIPTS -->
    <!-- Bootstrap js -->
    <script src="../assets/bootstrap-4.3.1/js/bootstrap.bundle.min.js"></script>

    <!-- Custom js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="../js/script.js" type="text/javascript"></script>
    <script src="../js/form_validation.js" type="text/javascript"></script>
    <script src="../assets/js/onepagenav.js"></script>
    <script src="../assets/js/wow.js"></script>
    <script>new WOW().init();</script>
    <script src="../assets/owl_carousel/owl.carousel.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function(){
            $("#edit").click(function(){
                $('#edit_password').hide();
                $("#change_password_form").slideToggle();
            });
            $("#close").click(function(){
                $('#edit_password').show();
                $("#change_password_form").slideToggle();
            });
        });
    </script>
</body>
</html>