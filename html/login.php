

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- title icon -->
    <link rel="icon" href="../img/address-book-regular.svg" type="icons/img">
    <!-- Font Awesome Icon -->
    <script src="https://kit.fontawesome.com/daa48e517c.js" crossorigin="anonymous"></script>
    <!-- BootStrap Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="../css/login.css" type="text/css">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sedan+SC&display=swap" rel="stylesheet">
</head>
<body>

    <!-- navigation bar -->
    <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container-fluid">

            <!-- brand -->
            <a href="index.php" class="navbar-brand">
                <img src="../img/book-atlas-solid.svg" alt="" width="35" height="32" class="d-inline-block align-items-center"> Library Management System
            </a>

            <!-- register button -->
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item">
                    <a href="register.php" class="nav-link text-white bg-dark">Register?</a>
                </li>
            </ul>

        </div>
    </nav>

    <!-- form control -->
    <form action="../api/login_connection.php" method="POST">
        <div class="container-sm py-5">
            <h1 class="text-center mb-5">Login</h1>
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <div class="form-floating mb-5">
                        <input name="username" type="text" class="form-control" id="floatingInput" placeholder="Enter your Username">
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating mb-5">
                        <input name="user_id" type="text" class="form-control" id="floatingInput" placeholder="Enter your Username">
                        <label for="floatingInput">User ID</label>
                    </div>
                    <div class="form-floating mb-5">
                        <input name="password" type="password" class="form-control" id="floatingInput" placeholder="Enter Your Password">
                        <label for="floatingInput">Password</label>
                    </div>
                    <!-- <div class="form-floating mb-5">
                        <input name="cred_type" type="text" class="form-control" id="floatingInput" placeholder="Teacher or Student?">
                        <label for="floatingInput">Credentials Type</label>
                    </div> -->
                    <div class="col mt-4 text-center">
                        <label for="inputCredentials" class="form-label">Credentials</label>
                        <select name="in_cred" id="inputCredentials" class="form-select">
                            <option value="1">Teacher</option>
                            <option value="2">Student</option>
                        </select>
                    </div>
                    <div class="col-sm mb-5">
                        <a href="#" class="float-end text-danger">Forgot Password?</a>
                        <br>
                    </div>
                    <div class="col-sm mt-6 text-center">
                        <button type="submit" class="btn btn-outline-primary btn-lg">Log In</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Javascript Separate Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>