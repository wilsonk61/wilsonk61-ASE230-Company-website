<?php   
require_once 'lib/text_read_function.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Hiric</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="bootstrap 5, premium, marketing, multipurpose" />
    <meta content="Themesbrand" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- icon -->
    <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/pe-icon-7-stroke.css" />

    <link href="css/style.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/colors/cyan.css" id="color-opt">
</head>

<body data-bs-theme="light">

    <!-- STRAT NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-white navbar-custom sticky sticky-white" role="navigation"
        id="navbar">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo text-uppercase" href="index.html">
                <i class="mdi mdi-alien"></i>Hiric
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu text-dark"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav navbar-center" id="navbar-navlist">
                    <li class="nav-item">
                        <a data-scroll href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#features" class="nav-link">Features</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#services" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#contact" class="nav-link">Contact</a>
                    </li>

                </ul>
                <div class="nav-button ms-auto">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <button type="button"
                                class="btn btn-primary navbar-btn btn-rounded waves-effect waves-light">Try it for
                                .17 BTC</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- PUT TITLE OF WEBSITE AND MISSION STATEMNT BELOW --TEXT FILE  -->
	<?php
		$missionStatementFile = 'Mission_Statement.txt';
		$MissionStatementContent = readFileContent($missionStatementFile);
	?>

    <!--START HOME-->
    <section class="section bg-home home-half" id="home" data-image-src="images/bg-home.jpg">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-white text-center">
                    <h1 class="home-title">Our Mission Statement and Promise to You</h1>
                    <p class="pt-3 home-desc mx-auto"> <?php echo ($MissionStatementContent); ?></p>
                    <!-- Modal -->
                    <div class="modal fade" id="watchvideomodal"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END HOME-->
    
    <!-- PUT TITLE OF WEBSITE AND MISSION STATEMNT ABOVE --TEXT FILE -->
    
    <!-- PUT OVERVIEW BELOW SOMEHOW -- TEXT FILE -->
	
	<?php
	$OverviewFile = 'Overview.txt';
	$OverviewContent = readFileContent($OverviewFile);	
	?>

    <!--START FEATURES-->
    <section class="section" id="features">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-2 order-lg-1">
                    <div class="features-box mt-5 mt-lg-0">
                        <h3 style="text-align: center;">A Look Into the Future and a Look Into Who we Are</h3>
                        <p class="text-muted web-desc"><?php echo ($OverviewContent); ?></p>
                        <a href="#" class="btn btn-primary mt-4 waves-effect waves-light">Learn More <i
                                class="mdi mdi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-7 order-1 order-lg-2">
                    <div class="features-img mx-auto me-lg-0">
                        <img src="images/growth-analytics.svg" alt="macbook image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END FEATURES-->
    
    <!-- PUT OVERVIEW ABOVE SOMEHOW -- TEXT FILE -->
        
    <!--SERVICES BELOW-- JSON FILE -->

    <!--START SERVICES-->
    <section class="section bg-light " id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1 class="section-title text-center">Our Services</h1>
                    <div class="section-title-border mt-3"></div>
                    <p class="section-subtitle text-muted text-center pt-4 font-secondary">We craft digital, graphic and
                        dimensional thinking, to create category leading brand experiences that have meaning and add a
                        value for our clients.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4 mt-4">
                    <div class="services-box">
                        <div class="d-flex">
                            <i class="pe-7s-diamond text-primary"></i>
                            <div class="ms-4">
                                <h4>Digital Design</h4>
                                <p class="pt-2 text-muted">Some quick example text to build on the card title and make
                                    up the bulk of the card's content. Moltin gives platform.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="services-box">
                        <div class="d-flex">
                            <i class="pe-7s-display2 text-primary"></i>
                            <div class="ms-4">
                                <h4>Unlimited Colors</h4>
                                <p class="pt-2 text-muted">Credibly brand standards compliant users without extensible
                                    services. Anibh euismod tincidunt laoreet Ipsum passage.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="services-box">
                        <div class="d-flex">
                            <i class="pe-7s-piggy text-primary"></i>
                            <div class="ms-4">
                                <h4>Strategy Solutions</h4>
                                <p class="pt-2 text-muted">Separated they live in Bookmarksgrove right at the coast of
                                    the Semantics, and large language ocean neary regelia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="services-box">
                        <div class="d-flex">
                            <i class="pe-7s-science text-primary"></i>
                            <div class="ms-4">
                                <h4>Awesome Support</h4>
                                <p class="pt-2 text-muted">It is a paradisematic country, in which roasted parts of
                                    sentences fly into your mouth leave for the far World.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="services-box">
                        <div class="d-flex">
                            <i class="pe-7s-news-paper text-primary"></i>
                            <div class="ms-4">
                                <h4>Truly Multipurpose</h4>
                                <p class="pt-2 text-muted">Even the all-powerful Pointing has no control about the blind
                                    texts it is an almost unorthographic.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="services-box">
                        <div class="d-flex">
                            <i class="pe-7s-plane text-primary"></i>
                            <div class="ms-4">
                                <h4>Easy to customize</h4>
                                <p class="pt-2 text-muted">Question Marks and devious Semikoli, but the Little Blind
                                    Text didn’t listen. She packed her seven versalia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="services-box">
                        <div class="d-flex">
                            <i class="pe-7s-arc text-primary"></i>
                            <div class="ms-4">
                                <h4>Pixel Perfect Design</h4>
                                <p class="pt-2 text-muted">There are many variations of passages of Lorem Ipsum
                                    available, but the majority have suffered alteration.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="services-box">
                        <div class="d-flex">
                            <i class="pe-7s-tools text-primary"></i>
                            <div class="ms-4">
                                <h4>Perfect Toolbox</h4>
                                <p class="pt-2 text-muted">Hampden-Sydney College in Virginia, looked up one of the more
                                    obscure Latin words, consectetur.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="services-box">
                        <div class="d-flex">
                            <i class="pe-7s-timer text-primary"></i>
                            <div class="ms-4">
                                <h4>Awesome Design</h4>
                                <p class="pt-2 text-muted">All the Lorem Ipsum generators on the Internet tend to repeat
                                    predefined chunks as necessary.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--START SERVICES-->
    
    <!--SERVICES ABOVE-- JSON FILE -->
    
    <!--TEAM BELOW -- CSV FILE -->

    <!--START ABOUT-US-->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="about-title mx-auto text-center">
                        <h2>A Digital web studio creating stunning &amp; Engaging online
                            Experiences </h2>
                        <p class="text-muted pt-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus donec various versions have evolved quam felis.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-3 col-sm-6">
                    <div class="team-box text-center">
                        <div class="team-wrapper">
                            <div class="team-member">
                                <img alt="" src="images/team/img-1.jpg" class="img-fluid rounded">
                            </div>
                        </div>
                        <h4 class="team-name">Frank Johnson</h4>
                        <p class="text-uppercase team-designation">CEO</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="team-box text-center">
                        <div class="team-wrapper">
                            <div class="team-member">
                                <img alt="" src="images/team/img-2.jpg" class="img-fluid rounded">
                            </div>
                        </div>
                        <h4 class="team-name">Elaine Stclair</h4>
                        <p class="text-uppercase team-designation">Designer</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="team-box text-center">
                        <div class="team-wrapper">
                            <div class="team-member">
                                <img alt="" src="images/team/img-3.jpg" class="img-fluid rounded">
                            </div>
                        </div>
                        <h4 class="team-name">Wanda Arthur</h4>
                        <p class="text-uppercase team-designation">Developer</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="team-box text-center">
                        <div class="team-wrapper">
                            <div class="team-member">
                                <img alt="" src="images/team/img-4.jpg" class="img-fluid rounded">
                            </div>
                        </div>
                        <h4 class="team-name">Joshua Stemple</h4>
                        <p class="text-uppercase team-designation">Manager</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--END ABOUT-US-->
    
    <!--TEAM ABOVE -- CSV FILE -->
    
    <!--CHANGE REVIEWS TO AWARDS BELOW -- CSV FILE -->

    <!--START TESTIMONIAL-->
    <section class="section" id="testi">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1 class="section-title text-center">What they've said</h1>
                    <div class="section-title-border mt-3"></div>
                    <p class="section-subtitle text-muted text-center font-secondary pt-4">The Big Oxmox advised her not
                        to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli.
                    </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="testimonial-box mt-4">
                        <div class="testimonial-decs p-4">
                            <div class="testi-icon">
                                <i class="mdi mdi-format-quote-open display-1"></i>
                            </div>
                            <img src="images/testimonials/user-1.jpg" alt=""
                                class="img-fluid mx-auto d-block img-thumbnail rounded-circle mb-4">
                            <div class="p-1">
                                <h5 class="text-center text-uppercase mb-3">Dennis Williams - <span
                                        class="text-muted text-capitalize">Charleston</span></h5>
                                <p class="text-muted text-center mb-0">“I feel confident imposing change on myself. It's
                                    a lot more fun progressing than
                                    looking back. That's why I ultricies enim at malesuada nibh diam on tortor neaded to
                                    throw curve balls.” </p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-box mt-4">
                        <div class="testimonial-decs p-4">
                            <div class="testi-icon">
                                <i class="mdi mdi-format-quote-open display-1"></i>
                            </div>
                            <img src="images/testimonials/user-2.jpg" alt=""
                                class="img-fluid mx-auto d-block img-thumbnail rounded-circle mb-4">
                            <div class="p-1">
                                <h5 class="text-center text-uppercase mb-3">Laurie Bell - <span
                                        class="text-muted text-capitalize">Worcester</span></h5>
                                <p class="text-muted text-center mb-0">“Our task must be to free ourselves by widening
                                    our circle of compassion to embrace
                                    all living creatures and the whole of quis consectetur nunc sit amet semper justo.
                                    nature and its beauty.” </p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-box mt-4">
                        <div class="testimonial-decs p-4">
                            <div class="testi-icon">
                                <i class="mdi mdi-format-quote-open display-1"></i>
                            </div>
                            <img src="images/testimonials/user-3.jpg" alt=""
                                class="img-fluid mx-auto d-block img-thumbnail rounded-circle mb-4">
                            <div class="p-1">
                                <h5 class="text-center text-uppercase mb-3">Howard Kelley - <span
                                        class="text-muted text-capitalize">Lynchburg</span></h5>
                                <p class="text-muted text-center mb-0">“I've learned that people will forget what you
                                    said, people will forget what you did,
                                    but people will never forget how donec in efficitur lectus, nec lobortis metus you
                                    made them feel.” </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END TESTIMONIAL-->
    
    <!--CHANGE REVIEWS TO AWARDS ABOVE -- CSV FILE -->

    <!-- CONTACT FORM START-->
    <section class="section " id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1 class="section-title text-center">Get In Touch</h1>
                    <div class="section-title-border mt-3"></div>
                    <p class="section-subtitle text-muted text-center font-secondary pt-4">We thrive when coming up with
                        innovative ideas but also understand that a smart concept should be supported with faucibus
                        sapien odio measurable
                        results.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="mt-4 pt-4">
                        <p class="mt-4"><span class="h5">Office Address 1:</span><br> <span
                                class="text-muted d-block mt-2">4461 Cedar Street Moro, AR 72368</span></p>
                        <p class="mt-4"><span class="h5">Office Address 2:</span><br> <span
                                class="text-muted d-block mt-2">2467 Swick Hill Street <br />New Orleans, LA
                                70171</span></p>
                        <p class="mt-4"><span class="h5">Working Hours:</span><br> <span
                                class="text-muted d-block mt-2">9:00AM To 6:00PM</span></p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="custom-form mt-4 pt-4">
                        <form method="post" name="myForm" onsubmit="return validateForm()">
                            <p id="error-msg"></p>
                            <div id="simple-msg"></div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input name="name" id="name" type="text" class="form-control"
                                            placeholder="Your name*">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input name="email" id="email" type="email" class="form-control"
                                            placeholder="Your email*">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                        <input type="text" class="form-control" id="subject"
                                            placeholder="Your Subject.." />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                        <textarea name="comments" id="comments" rows="4" class="form-control"
                                            placeholder="Your message..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-end">
                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary"
                                        value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT FORM END-->

    <!--START FOOTER-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mt-4">
                    <a class="footer-logo text-uppercase" href="#">
                        <i class="mdi mdi-alien"></i>Hiric
                    </a>
                    <div class="text-muted mt-4">
                        <ul class="list-unstyled footer-list">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 mt-4">
                    <h4>Information</h4>
                    <div class="text-muted mt-4">
                        <ul class="list-unstyled footer-list">
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Bookmarks</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 mt-4">
                    <h4>Support</h4>
                    <div class="text-muted mt-4">
                        <ul class="list-unstyled footer-list">
                            <li><a href="">FAQ</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Disscusion</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 mt-4">
                    <h4>Subscribe</h4>
                    <div class="mt-4">
                        <p>In an ideal world this text wouldn’t exist, a client would acknowledge the importance of
                            having web copy before the design starts.</p>
                    </div>
                    <form class="form subscribe">
                        <input placeholder="Email" class="form-control text-white" required>
                        <a href="#" class="submit"><i class="pe-7s-paper-plane"></i></a>
                    </form>
                </div>
            </div>
        </div>
    </footer>
    <!--END FOOTER-->

    <!--START FOOTER ALTER-->
    <div class="footer-alt">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-sm-start pull-none">
                        <p class="copy-rights  mb-3 mb-sm-0">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Hiric - Themesbrand
                        </p>
                    </div>
                    <div class="float-sm-end pull-none copyright">
                        <ul class="list-inline d-flex flex-wrap social m-0">
                            <li class="list-inline-item"><a href="" class="social-icon"><i
                                        class="mdi mdi-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="" class="social-icon"><i
                                        class="mdi mdi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="" class="social-icon"><i
                                        class="mdi mdi-linkedin"></i></a></li>
                            <li class="list-inline-item"><a href="" class="social-icon"><i
                                        class="mdi mdi-google-plus"></i></a></li>
                            <li class="list-inline-item"><a href="" class="social-icon"><i
                                        class="mdi mdi-microsoft-xbox"></i></a></li>
                        </ul>
                    </div>
                    <!-- <div class="clearfix"></div> -->
                </div>
            </div>
        </div>
    </div>
    <!--END FOOTER ALTER-->

    <!-- Style switcher -->
    <div id="style-switcher">
        <div>
            <h3 class="">Select your color</h3>
            <ul class="pattern">
                <li>
                    <a class="color1" href="javascript: void(0);" onclick="setColor('cyan')"></a>
                </li>
                <li>
                    <a class="color2" href="javascript: void(0);" onclick="setColor('red')"></a>
                </li>
                <li>
                    <a class="color3" href="javascript: void(0);" onclick="setColor('green')"></a>
                </li>
                <li>
                    <a class="color4" href="javascript: void(0);" onclick="setColor('pink')"></a>
                </li>
                <li>
                    <a class="color5" href="javascript: void(0);" onclick="setColor('blue')"></a>
                </li>
                <li>
                    <a class="color6" href="javascript: void(0);" onclick="setColor('purple')"></a>
                </li>
                <li>
                    <a class="color7" href="javascript: void(0);" onclick="setColor('orange')"></a>
                </li>
                <li>
                    <a class="color8" href="javascript: void(0);" onclick="setColor('yellow')"></a>
                </li>
            </ul>
        </div>
        <div class="bottom">
            <a href="javascript: void(0);" id="mode" class="mode-btn text-white">
                <i class="mdi mdi-weather-sunny bx-spin mode-light"></i>
                <i class="mdi mdi-moon-waning-crescent mode-dark"></i>
            </a>
            <a href="javascript: void(0);" class="settings" onclick="toggleSwitcher()"><i
                    class="mdi mdi-cog  mdi-spin"></i></a>
        </div>
    </div>
    <!-- end Style switcher -->

    <!-- javascript -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/smooth-scroll.polyfills.min.js"></script>
    <script src="js/gumshoe.polyfills.min.js"></script>
    <!-- Main Js -->
    <script src="js/app.js"></script>
</body>

</html>
