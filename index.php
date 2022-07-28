<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/index.css">
    <!-- jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Counts JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <link rel="icon" href="assets/images/logo.png">
    <title>TechJam</title>
</head>

<body>
    <nav class="navbar  sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index">
                <img src="assets/images/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top"> TechJam</a>
            <span class="navbar-text">
                The Creativity you need...
            </span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav nav-tabs navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 style="color:slateblue; font-family:monospace">Elegant and Creative Solutions</h1>
                    <h2>We are team of talented designers making websites with Bootstrap</h2>
                    <div class="d-flex">
                        <a href="#abt" class="btn-get-started scrollto" style="text-decoration: none;">Get Started &#8594;</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="assets/Pics/hero-img.jpg" class="img-fluid animated" alt="" width="550px">
                </div>
            </div>
        </div>

    </section>

    <!-- ======= About Section ======= -->
    <section class="about" id="abt">
        <div class="container">
            <div class="row">
                <div class="col align-self-start">
                    <div class="icon-box shadow-lg">
                        <div class="icon"><img src="assets/Pics/icon-service.gif" width="48px" /></div>
                        <h4 class="title">Quality Services</h4>
                        <p class="description">We help clients save time by conducting research into trends.</p>
                    </div>
                </div>
                <div class="col align-self-center">
                    <div class="icon-box shadow-lg">
                        <div class="icon"><img src="assets/Pics/icons-idea.gif" width="48px" /></div>
                        <h4 class="title">Valuable Ideas</h4>
                        <p class="description">Our goal is simple, to make things that people care about.</p>
                    </div>
                </div>
                <div class="col align-self-end">
                    <div class="icon-box shadow-lg">
                        <div class="icon"><img src="assets/Pics/icons-budget.gif" width="48px" /></div>
                        <h4 class="title">Budget Friendly</h4>
                        <p class="description">We can highlight areas where cost savings can be made.</p>
                    </div>
                </div>

                <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h2 style="color: red; font-family:cursive">About Us</h2>
                    <h3 style="color: rebeccapurple">
                        We deal With The Aspects Of Professional IT Services
                    </h3>
                    <p style="font-size: larger;">
                        We offer comprehensive data analysis and business research services designed to provide you with in depth knowledge needed to make complex decisions in your business. <br> From competitor research for a growing startup to multi
                        year financial analytics for an investment firm and much more, we offer the scalable, industry targeted expertise and mastery of technology needed to get the most out of your business in every new endeavor you undertake.
                    </p>
                    <div style="display: flex; justify-content: end;">
                        <button class="btn btn-primary" id="knowmore">Know more &#8594;</button>
                        <script>
                            $('#knowmore').click(function() {
                                window.location = "aboutus"
                            })
                        </script>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="mission" style="display: flex; justify-content: center;">
        <div style="display: flex; padding: 2%; border-radius: 10px;">
            <div style="margin: 5% auto;">
                <h2 style="color: tomato;">Our Mission</h2>
                <p>Our goal is simple, to make things that people care about. <br> We were founded on this principle and we will always be commited to it.</p>
                <ul>
                    <li>Practice maturity in hardware, firmware and middleware.</li>
                    <li>Complete software platform development.</li>
                    <li>Device and field testing for electronics.</li>
                </ul>
            </div>
            <div style="display: flex; margin: 2%;">
                <div style="display: flex; flex-direction: column;">
                    <img src="assets/Pics/m1.jpg" alt="" style="border-radius: 10px; margin: 2%;">
                    <img src="assets/Pics/m2.jpg" alt="" style="border-radius: 10px; margin: 2%;">
                </div>
                <div style="display: flex; flex-direction: column;">
                    <img src="assets/Pics/m3.jpg" alt="" style="border-radius: 10px; margin: 2%;">
                    <img src="assets/Pics/m4.jpg" alt="" style="border-radius: 10px; margin: 2%;">
                </div>
            </div>
        </div>
    </section>
    <!--  Service Section  -->
    <section>
        <div class="container" style="padding: 2%; margin:0 auto">
            <div class="row" style="justify-content: center;">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="width: 400px;">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    </div>
                    <div class="carousel-inner" style="border-radius: 20px;">
                        <div class="carousel-item active">
                            <img src="assets/Pics/cybersecurity.jpg" class="d-block" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Cyber Security</h5>
                                <p> Expertise in a IT consultancy for the many companies, for their different working areas.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/Pics/digital-service.jpg" class="d-block" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Digital Service</h5>
                                <p> Expertise in a IT consultancy for the many companies, for their different working areas.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/Pics/product-design.jpg" class="d-block" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Product Design</h5>
                                <p> Expertise in a IT consultancy for the many companies, for their different working areas.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/Pics/web-dev.jpg" class="d-block" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Web Development</h5>
                                <p> Expertise in a IT consultancy for the many companies, for their different working areas.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/Pics/it-consult.jpg" class="d-block" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>IT Consultancy</h5>
                                <p> Expertise in a IT consultancy for the many companies, for their different working areas.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h2 style="color:red; font-family:cursive">Our Services</h2>
                    <p style="font-size: larger;">
                        Web designing in a powerful way of just not a profession, however, in a passion for our Company. We have a tendency to believe the idea that smart looking.
                    </p>
                    <div class="d-flex justify-content-center">
                        <a href="services" class="btn btn-primary" style="text-decoration: none;">All Services &#8594;</a>
                    </div>

                    <section class="counts-section" style="margin: 2%;">
                        <div class="text-dark py-5">
                            <div class="container1">
                                <div class="row" style="justify-content: center;">
                                    <div class="col-lg-3 col-6 text-center">
                                        <h2 data-toggle="counterUp">69</h2>
                                        <h6>Clients</h6>
                                    </div>
                                    <div class="col-lg-3 col-6 text-center">
                                        <h2 data-toggle="counterUp">420</h2>
                                        <h6>Projects</h6>
                                    </div>
                                    <div class="col-lg-3 col-6 text-center">
                                        <h2 data-toggle="counterUp">4,262</h2>
                                        <h6>Hours Of Support</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </div>
    </section>



    <!-- Bootstrap JS -->
    <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        // jQuery counterUp
        $('[data-toggle="counterUp"]').counterUp({
            delay: 5,
            time: 1500
        });
    </script>
    <footer class="bg-dark" style="padding: 2%;">
        <div class="row">
            <div class="col-md-4">
                <div class="d-flex" style="justify-content: center;">
                    <img src="assets/images/logo.png" alt="" width="70px" height="70px">
                    <h3 style="color: white; margin-left: 2%;">TechJam</h3>
                </div>
                <p style="color: white; text-align: center;">We’ve designed a culture that allows our stewards to assimilate with our clients and bring the best of who we are to your business. <br> We’ve designed a culture that allows our stewards.</p>
            </div>
            <div class="col-md-4" style="color: white; text-align: center;">
                <h3><a href="services.html" style="text-decoration: none;"> Services</a></h3>
                <p>Cyber Security <br>Digital Service <br> Web Development <br> IT Consultancy <br> Product Design</p>
            </div>
            <div class="col-sm-3 col-md-4" style="color: white; text-align: center;">
                <h6 class="text-uppercase font-weight-bold" style="color: blue;">Newsletter</h6>
                <p class="text-muted">Subscribe to our news letter!</p>
                <div style="border-bottom: 1px solid white;">
                    <div class="input-group" style="align-items: center;">
                        <input type="email" placeholder="Enter your email address" class="form-control">
                        <div class="input-group-append" style="border: 1px solid white;">
                            <button id="subscribe" type="submit" class="btn btn-link"><i class="fa fa-paper-plane" style="height: 5px;"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center>
            <p class="text-white" style="text-align: center;"> <br><br> Copyright &copy; 2021 TechJam Ltd. - Design: <span style="color:purple"><b>Straw hat Pirates</b></span></p>
        </center>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>
        $('.counter-value').each(function() {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 3500,
                easing: 'swing',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    </script>

</body>

</html>