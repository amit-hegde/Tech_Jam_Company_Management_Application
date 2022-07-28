<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="Assets/css/contact.css">
    <link rel="icon" href="assets/images/logo.png">
    <title>Contact us</title>
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
                        <a class="nav-link" aria-current="page" href="index">Home</a>
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
                        <a class="nav-link active" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="contacthead">
        <h1>Contact Us</h1>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style="margin: 2%;">
        <div class="container">

            <div class="section-title">
                <span>Contact</span>
                <h2>Contact</h2>
            </div>

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>Hubballi, Karnataka, India</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>xyz@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+91 XXXXXXXXXX</p>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3847.4434767925254!2d75.07980061456463!3d15.3524502893272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bb8d6b8fd942131%3A0x67b6dbf77ee7c3cb!2sKLE%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1634213286735!5m2!1sen!2sin" width="100%" height="290" style="border:0;" allowfullscreen=""></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="askdata.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6 mt-3 mt-md-0">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section>



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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>