<?php
include("connection.php");
if (isset($_COOKIE["isauth"])) {
    // echo 
    //   echo "Value is: " . $_COOKIE["isauth"];
    // setcookie("user", "", time() - 3600);

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
        $sql = "select * from product where pid='" . $id . "'";
        //  echo $sql;
        $res = $conn->query($sql);
        if ($res->num_rows == 1) {
            $r = $res->fetch_assoc();
            //  echo $r['pname'];







?>
            <!doctype html>
            <html lang="en">

            <head>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">

                <!-- Bootstrap CSS -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
                <!-- <link rel="stylesheet" href="assets/css/loginstyle.css"> -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
                <link rel="stylesheet" href="assets/css/admindashboard.css">
                <link rel="icon" href="assets/images/logo.png">
                <title>Dashboard</title>
            </head>

            <body>
                <nav class="navbar  sticky-top navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="assets/images/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top"> Company Name</a>
                        <span class="navbar-text">
                            Company Slogan...
                        </span>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav nav-tabs navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="admindashboard">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">EDIT</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " href="logout"><?php echo $_COOKIE["admin_name"]; ?><span> </span><i class="fas fa-sign-out-alt"></i></a>

                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <!-- <h1 style="text-align: center;">Admin Panel</h1> -->
                <h3 style="text-align: center;">Update Details</h3>
                <div class="a">
                    <form action="updatedata" method="POST">
                        <div class="row">
                            <div class="col">
                                <label for="title">Name</label><br>
                                <input type="text" class="form-control" name="title" id="title" value=<?php echo $r['pname'] ?> required>
                            </div>
                            <div class="col">
                                <label for="image">Image URL</label><br>
                                <input type="url" name="imgurl" class="form-control" id="image" value=<?php echo $r['imgurl'] ?> required>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="count">Number of Product</label><br>
                                <input type="number" name="count" class="form-control" id="count" value=<?php echo $r['pcount'] ?> required>
                            </div>
                            <div class="col">
                                <label for="price">Price of the product</label><br>
                                <input type="number" name="price" class="form-control" id="price" value=<?php echo $r['price'] ?> required>
                            </div>
                        </div>
                        <br>
                        <label for="desc">Description</label><br>
                        <textarea name="content" class="form-control" id="desc" cols="5" rows="5" required><?php echo $r['disc'] ?></textarea>
                        <br>
                        <button type="submit" class="btn btn-primary" name="id" value=<?php echo $r['pid'] ?>>UPDATE</button>
                        <a href="admindashboard" class="btn btn-primary">Cancel</a>
                        <br>
                    </form>
                </div>



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
<?php
        }
    }
    $conn->close();
} else {
    echo "Value is: " . $_COOKIE["isauth"];
    header("location:logadmin");
}
?>