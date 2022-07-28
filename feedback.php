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
                            <a class="nav-link" aria-current="page" href="admindashboard">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="orders">Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="feedback">Feedback</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="logout"><?php echo $_COOKIE["admin_name"]; ?><span> </span><i class="fas fa-sign-out-alt"></i></a>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <h1 style="text-align: center;">FEEDBACK LIST</h1>
        <h3>NEW-FEEDBACK LIST</h3>
        <div class="table" style="margin:1px auto 10px auto;">
            <div class="tablerows" style="margin:1px auto 30px auto;">
                <table>
                    <tr>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>SUBJECT</th>
                        <th>COMMENTS</th>
                        <th>STATUS</th>
                        <th></th>
                    </tr>

                    <?php

                    $res = $conn->query("SELECT * FROM `feedback` WHERE STATUS=0");
                    if ($res->num_rows > 0) {
                        while ($r = $res->fetch_assoc()) {
                    ?>
                            <tr>
                                <td>
                                    <?php echo $r['name'] ?>
                                </td>
                                <td>
                                    <?php echo $r['email'] ?>
                                </td>
                                <td> <?php echo $r['sub'] ?>
                                    <!-- <%= post.content.substring(0,50) %> -->
                                </td>
                                <td>
                                    <?php echo $r['data'] ?>
                                    <!-- <%= post.content.substring(0,50) %> -->
                                </td>
                                <td>
                                    NOT CONTACTED
                                    <!-- <%= post.content.substring(0,50) %> -->
                                </td>
                                <td>
                                    <form action="feedbackstatus" method="POST">
                                        <input type="hidden" name="name" value=<?php echo $r['name'] ?>>
                                        <!-- <input type="hidden" name="table" value="feedback"> -->
                                        <button type="submit" name="email" value=<?php echo $r['email'] ?>><i class="fas fa-clipboard-check" style="color: green;"></i></i></button>
                                        <!-- value="<%=post._id%> " -->
                                    </form>
                                </td>
                            </tr>
                            <!-- <% } )%> -->
                    <?php }
                    }

                    ?>
                </table>
            </div>
        </div>
        <h3>CONTACTED LIST</h3>
        <div class="table" style="margin:1px auto 10px auto ;">
            <div class="tablerows" style="margin:1px auto 10px auto ;">
                <table>
                    <tr>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>SUBJECT</th>
                        <th>COMMENTS</th>
                        <th>STATUS</th>
                    </tr>

                    <?php

                    $res1 = $conn->query("SELECT * FROM `feedback` WHERE STATUS=1");
                    if ($res1->num_rows > 0) {
                        while ($r = $res1->fetch_assoc()) {
                    ?>
                            <tr>
                                <td>
                                    <?php echo $r['name'] ?>
                                </td>
                                <td>
                                    <?php echo $r['email'] ?>
                                </td>
                                <td> <?php echo $r['sub'] ?>
                                    <!-- <%= post.content.substring(0,50) %> -->
                                </td>
                                <td>
                                    <?php echo $r['data'] ?>
                                    <!-- <%= post.content.substring(0,50) %> -->
                                </td>
                                <td>
                                    CALLED
                                    <!-- <%= post.content.substring(0,50) %> -->
                                </td>

                            </tr>
                            <!-- <% } )%> -->
                    <?php }
                    }
                    $conn->close();
                    ?>
                </table>
            </div>
        </div>
        <!-- <%- include("partials/footer") -%> -->


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



} else {
    echo "Value is: " . $_COOKIE["isauth"];
    header("location:logadmin");
}
?>