<?php
include("connection.php");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/products.css">
    <link rel="icon" href="assets/images/logo.png">
    <title>TechJam</title>
</head>

<body>
    <nav class="navbar  sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
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
                        <a class="nav-link active" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="aboutus">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="mypp">
        <h2>PRODUCTS</h2>
    </div>
    <section class="allpp">
        <div class="container1">
            <div class="row">
                <div class="col-md-12" style="margin-top: 2%;">
                    <div class="row grid" style="margin-left: 2%;">
                        <?php
                        $res = $conn->query("select * from product");
                        if ($res->num_rows > 0) {
                            while ($r = $res->fetch_assoc()) {
                        ?>

                                <div class="card shadow-lg p-3 mb-5 bg-body rounded" style="width: 18rem; margin: 20px 30px;">
                                    <img src=<?php echo $r['imgurl'] ?> class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"> <?php echo $r['pname'] ?></h5>
                                        <h6>₹ <?php echo $r['price'] ?></h6>
                                        <p class="card-text"><?php echo substr($r['disc'], 0, 50) . "...." ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">
                                            <form action="buyproduct" method="POST"><button type="submit" class="btn btn-outline-success" id="buy" name="id" value=<?php echo $r['pid'] ?>>Buy Now</button></form>
                                        </small>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        $conn->close();
                        ?>
                    </div>
                </div>
                <!-- <div style="text-align: center; padding-bottom: 2%;">
                    <div class="pagination">
                        <a href="#">&laquo;</a>
                        <a class="active" href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">6</a>
                        <a href="#">&raquo;</a>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <footer class="bg-dark" style="padding: 2%;border-top-left-radius: 50px; border-top-right-radius: 50px;">
        <div class="footer-top text-white" style="text-align: center;">
            <div class="container">
                <div class="row  justify-content-center">
                    <div class="col-lg-6">
                        <h3>TechJam</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat consequuntur est, saepe, eaque amet earum esse expedita, consectetur eum quis impedit odit porro consequatur quaerat vel at! Consectetur, laborum accusantium.</p>
                    </div>
                </div>

                <div class="row footer-newsletter justify-content-center">
                    <div class="col-lg-6">
                        <form action="" method="">
                            <div class="form-floating mb-3 text-black">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                                <div id="emailHelp" class="form-text" style="text-align: center; margin: 10px;">Subscribe to our news letter!</div>
                                <button class="btn btn-primary">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div style="text-align: center;">
                    <a href="#" class="fa fa-twitter" style="color: #55ACEE;"></a>
                    <a href="#" class="fa fa-linkedin" style="color: #007bb5;"></a>
                    <a href="#" class="fa fa-github" style="color: white"></a>
                </div>

            </div>
        </div>
        <p class="text-white" style="text-align: center;"> <br><br> Copyright &copy; 2021 TechJam Ltd. - Design: <span style="color:purple"><b>Straw hat Pirates</b></span></p>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    -->

</body>

</html>