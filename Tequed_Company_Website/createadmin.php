<?php
include("connection.php");
if (isset($_COOKIE["isauth"])) {
    // echo 
    //   echo "Value is: " . $_COOKIE["isauth"];
    // setcookie("user", "", time() - 3600);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/loginstyle.css">
    <title>Create</title>
</head>

<body>
    <?php
    session_start();
    $err = "";
    if (isset($_SESSION["iserr"])) {

        $err = $_SESSION['iserr'];
        session_unset();
        session_destroy();
    }
    ?>
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
                        <a class="nav-link active" href="#">Admin Create</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h2>Admin Create</h2>
        <img src="assets/images/lock.jpg" alt="" width="50px" height="50px">
        <p style="color:red"><?php echo $err ?></p>
        <form action="addadmin.php" method="POST" style="padding: 2%;">
        <div class="form-floating mb-3">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="username" name="uname" placeholder="Username" required>
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="pass" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>
            <div class="text-center" style="padding: 2%;">
                <button class="btn btn-primary" id="submit">Create</button>
            </div>
        </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ " crossorigin="anonymous "></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js " integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js " integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u " crossorigin="anonymous "></script>
    -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $("#submit").click(function() {
            var user = $("#username").val();
            var pass = $("#password").val();

            if (user == '' || pass == '') {
                swal({
                    title: "Empty Fields!",
                    text: "Please ensure all fields are filled correctly...",
                    icon: "warning",
                    button: "Retry!",
                });
            } else {
                //   swal({
                //                 title: "Welcome!",
                //                 text: "Login Successful!",
                //                 icon: "success",
                //             });
            }
        });
    </script>

</body>

</html>
<?php


} else {
    echo "Value is: " . $_COOKIE["isauth"];
    header("location:logadmin");
}
?>