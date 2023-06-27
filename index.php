<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Login Page
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="assets/css/material-dashboard.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="g-sidenav-show  bg-gray-200">
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div class="py-5" style="overflow-x:hidden;">
            <div class="container ">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <?php
                        if (isset($_SESSION['message'])) {
                            if ($_SESSION['message'] == "Invalid email or password") {
                        ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Sorry</strong> <?= $_SESSION['message']; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                        <?php
                                unset($_SESSION['message']);
                            }
                        }
                        ?>

                        <?php if (isset($_SESSION['message'])) {
                            if ($_SESSION['message'] == "Logged Out Successfuly") { ?>
                                <div class="alert alert-success " role="alert">
                                    <strong>Done</strong> <?= $_SESSION['message']; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                        <?php
                                unset($_SESSION['message']);
                            }
                        }
                        if (isset($_SESSION['auth'])) {
                            session_unset();
                        }
                        ?>
                        <div class="card">
                            <div class="card-header">
                                <h4>Login To Admin Panel</h4>
                            </div>
                            <div class="card-body">
                                <form action="functions/authcode.php" method="POST">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input required type="email" name="email" class="form-control" placeholder="Enter Your Email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input required minlength="8" type="password" name="password" class="form-control" placeholder="Enter Your Password">
                                    </div>
                                    <button name="login_btn" type="submit" class="btn btn-primary ms-2 px-5 " style="margin-left:140px!important" ;>Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer pt-5">
            <nav class="navbar fixed-bottom navbar-dark bg-dark">
                <div class="container-fluid">
                <span class="text-white float-end" style="font-size:12px;">&copy; 2023</span>
                    <!-- <span class="text-white " style="font-size:12px;">Made With Love By MAO</span> -->
                    <!-- <span class="text-white " style="font-size:4px;">Scorpion&MAO</span> -->
                </div>
            </nav>
        </footer>
    </main>
    <script src="assets/js/jquery-3.6.2.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"> </script>
    <script src="assets/js/perfect-scrollbar.min.js"></script>
    <script src="assets/js/smooth-scrollbar.min.js"></script>
</body>

</html>