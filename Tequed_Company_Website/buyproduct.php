<?php
include("connection.php");
$id = "";
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = test_input($_POST["id"]);
}
if (isset($_COOKIE["pid"])) {
    $id = $_COOKIE["pid"];
    // echo $id;
    setcookie("pid", "", time() - 3600, "/");
}
$txt = "";
if (isset($_COOKIE[$id])) {
    $txt = $_COOKIE[$id];
}
if ($id != "") {
    $sql = "select * from product where pid='" . $id . "'";
    //  echo $sql;
    $res = $conn->query($sql);
    if ($res->num_rows == 1) {
        $r = $res->fetch_assoc();


?>
        <!doctype html>
        <html lang="en">

        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <link rel="stylesheet" href="assets/css/style.css">
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
                                <a class="nav-link active" href="products">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="services">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="aboutus">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="contact">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- <div style="background-image: url(https://bit.ly/3mHAQ9B);"> -->
            <center>
                <h4 style="color: green; background-color: rgba(204, 255, 175, 0.883);padding: 2px;
    max-width: fit-content;
    margin: 5px;"><?php echo $txt ?></h4>
            </center>
            <div class="container m-5">
                <div class="row">
                    <div class="col">
                        <img src=<?php echo $r['imgurl'] ?> alt="" class="rounded mx-auto d-block">
                        <br>
                        <h2 class="d-flex justify-content-center"> <?php echo $r['pname'] ?></h2>
                        <h3>₹ <?php echo $r['price'] ?></h3>
                        <p>
                            <?php echo $r['disc'] ?>
                        </p>
                    </div>
                    <div class="col">
                        <h1 class="d-flex justify-content-center">BUYERS FORM</h1>
                        <form action="buy" method="POST">

                            <label for="title">Product Name</label><br>
                            <input type="text" class="form-control" name="title" id="title" value=<?php echo str_replace(' ', '_', $r['pname']) ?> readonly>


                            <label for="image">Price</label><br>
                            <input type="url" name="price" class="form-control" id="image" value=<?php echo $r['price'] ?> readonly>
                            <label for="name">Name</label><br>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name" required>
                            <label for="email">Email</label><br>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email" required>
                            <label for="pno">Phno</label><br>
                            <input type="tel" class="form-control" name="phno" id="pno" placeholder="Enter Your mobile no" required>
                            <br>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="submit" name="id" value=<?php echo $r['pid'] ?> class="btn btn-primary d-flex justify-content-center">SUBMIT</button>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
            </div>



            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

            <!-- Option 2: Separate Popper and Bootstrap JS -->

            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

        </body>

        </html>
<?php
    }
}

$conn->close();


?>