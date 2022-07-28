<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/heroes/"> -->



    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        @media (min-width: 992px) {
            .rounded-lg-3 {
                border-radius: .3rem;
            }
        }
    </style>
    <link rel="icon" href="assets/images/logo.png">
    <title>TechJam</title>
</head>

<body>

    <?php

    include("connection.php");
    $name = $email = $sub = $data =  "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $sub = test_input($_POST["subject"]);
        $data = test_input($_POST["message"]);

        $sql = "INSERT INTO `feedback`(`name`, `email`, `sub`, `data`, `status`) VALUES ('" . $name . "', '" . $email . "','" . $sub . "', '" . $data . "','0');";
        //  echo $sql;
        //  $conn->query($sql);
        if ($conn->query($sql) === TRUE) {
            //   echo "New record created successfully";
    ?>

            <div class="px-4 py-5 my-5 text-center">
                <img class="d-block mx-auto mb-4" src="assets/images/logo.png" alt="" width="72" height="57">
                <h1 class="display-5 fw-bold" style="color: green;">Sent Request</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">You have sucessfully sent message, we will get back to with the answer for your request</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <a href="index" class="btn btn-primary btn-lg px-4 gap-3">HOME</a>
                        <a href="contact" class="btn btn-outline-secondary btn-lg px-4">BACK</a>
                    </div>
                </div>
            </div>
        <?php
        } else {
            // echo "Error: " "<br>" . $conn->error;
        ?>

            <div class="px-4 py-5 my-5 text-center">
                <img class="d-block mx-auto mb-4" src="assets/images/logo.png" alt="" width="72" height="57">
                <h1 class="display-5 fw-bold" style="color: red;">Request Not Sent</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">Your request not able to process at the time,please try again after sometimes!</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <a href="index" class="btn btn-primary btn-lg px-4 gap-3">HOME</a>
                        <a href="contact" class="btn btn-outline-secondary btn-lg px-4">TRY AGAIN</a>
                    </div>
                </div>
            </div>
    <?php
        }

        $conn->close();
        // header("location:admindashboard");


    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>