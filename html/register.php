<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- title icon -->
    <link rel="icon" href="../img/address-book-regular.svg" type="icons/img">
    <!-- Font Awesome Icon -->
    <script src="https://kit.fontawesome.com/daa48e517c.js" crossorigin="anonymous"></script>
    <!-- BootStrap Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="../css/register.css" type="text/css">
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
            <a href="#" class="navbar-brand">
                <img src="../img/book-atlas-solid.svg" alt="" width="35" height="32" class="d-inline-block align-items-center"> Library Management System
            </a>

        </div>
    </nav>

    <!-- form control -->
    <form action="../api/register_connection.php" method="POST">
        <div class="container-sm">
            <h1 class="text-center mb-5">Register</h1>
            <div class="row g-3 justify-content-center">
                <div class="col-md-5">
                    <!-- <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4"> -->
                    <div class="form-floating mb-4">
                        <input name="email" type="email" class="form-control" id="floatingInput" placeholder="Enter your Email Id">
                        <label for="floatingInput">Email</label>
                    </div>
                </div>
                <div class="col-md-5">
                    <!-- <label for="inputUsername" class="form-label">Username</label>
                    <input type="email" class="form-control" id="inputUsername"> -->
                    <div class="form-floating mb-5">
                        <input name="username" type="text" class="form-control" id="floatingInput" placeholder="Enter your Username">
                        <label for="floatingInput">Username</label>
                    </div>
                </div>
                <div class="col-5">
                    <!-- <label for="inputPassword4" class="form-label">Password</label>
                    <input type="email" class="form-control" id="inputPassword4"> -->
                    <div class="form-floating mb-5">
                        <input name="password" type="password" class="form-control" id="floatingInput" placeholder="Enter your Password">
                        <label for="floatingInput">Password</label>
                    </div>
                </div>
                <div class="col-5">
                    <!-- <label for="inputConfirmPassword4" class="form-label">Confirm Password</label>
                    <input type="email" class="form-control" id="inputConfirmPassword4"> -->
                    <div class="form-floating mb-5">
                        <input name="con_password" type="password" class="form-control" id="floatingInput" placeholder="Enter your Confirm Password">
                        <label for="floatingInput">Confirm Password</label>
                    </div>
                </div>
                <div class="col-5">
                    <!-- <label for="inputConfirmPassword4" class="form-label">Confirm Password</label>
                    <input type="email" class="form-control" id="inputConfirmPassword4"> -->
                    <div class="form-floating mb-5">
                        <input name="user_id" type="text" class="form-control" id="floatingInput" placeholder="Enter your User Identification">
                        <label for="floatingInput">User Identification</label>
                    </div>
                </div>
                <div class="w-100"></div>
                <!-- <div class="col-5">
                    <div class="form-floating mb-5">
                        <input name="cred_type" type="text" class="form-control" id="floatingInput" placeholder="Teacher or Student?">
                        <label for="floatingInput">Credentials Type</label>
                    </div>
                </div> -->
                <div class="col-md-4 text-center">
                    <label for="inputCredentials" class="form-label">Credentials</label>
                    <select name="in_cred" id="inputCredentials" class="form-select">
                        <option value="1">Teacher</option>
                        <option value="2">Student</option>
                    </select>
                </div>
                <div class="col-md-4 text-center">
                    <label for="inputGender" class="form-label">Gender</label>
                    <select name="gender" id="inputGender" class="form-select">
                        <option value="1">Select Option</option>
                        <option value="2">Male</option>
                        <option value="3">Female</option>
                    </select>
                </div>
                <div class="w-100"></div>
                <div class="col-3">
                    Already have an account?<a href="login.php" class="float-end text-success">Log In</a>
                </div>
                <div class="col-12 text-center mt-5">
                    <button type="submit" class="btn btn-outline-primary">Sign in</button>
                </div>
            </div>

        </div>
    </form>

    <!-- Javascript Separate Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>