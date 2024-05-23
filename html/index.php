<?php
session_start();

if(!isset($_SESSION['in_cred'])){
    header('Location: login.php');
    exit;
}

if($_SESSION['in_cred'] == '2'){
    header('location: student.php');
}else if($_SESSION['in_cred'] == '1'){
    header('location: teacher.php');
}else{
    echo "unexpected value in session variables in_cred";
}

// if($_SESSION['in_cred'] == '2'){
//     header('location: student.php');
// }else{
//     header('location: teacher.php');
// }

$data = new mysqli("localhost","root","","library_system");

$sql = "SELECT * FROM book_list";

$result = $data ->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- title icon -->
    <link rel="icon" href="../img/book-open-reader-solid.svg" type="icons/img">
    <!-- Font Awesome Icon -->
    <script src="https://kit.fontawesome.com/daa48e517c.js" crossorigin="anonymous"></script>
    <!-- IonIcons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- BootStrap Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom Css -->
    <link rel="stylesheet" href="../css/index.css" type="text/css">
</head>
<body>

    <!-- navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">

            <!-- brand -->
            <a class="navbar-brand" href="#">
                <img src="../img/book-atlas-solid.svg" alt="" width="35" height="32" class="d-inline-block align-items-center"> Library Management System 
            </a>
            
            <!-- button plugin for responsive -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- navigation link -->
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">
                            <!-- Log In <ion-icon name="log-in-outline"></ion-icon> -->
                            Log In <i class="fas fa-sign-in-alt"></i>
                        </a>
                    </li>
                </ul>
            </div>
        
        </div>
    </nav>

    <!-- container -->
    <container>

    <?php
    
    while($info = $result ->fetch_assoc()){

    ?>

        <!-- list of the books -->
        <div class="container">
            <div class="row justify-content-between row-cols-4">
                <div class="col-1">
                    <div class="card">
                    <img src="../uploads/<?php echo "{$info['images']}";?>" alt="" width="200" height="200" style="object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo "{$info['book_name']}"?></h5>
                            <h6 class="card-subtitle">Author:<?php echo "{$info['author']}"?></h6>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-outline-primary">Take the Book?</a>
                            <a href="#" class="btn btn-outline-primary">Return?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php
    }
    ?>

        <!-- quote card -->
        <div class="container-sm">
            <div class="card text-center">
                <div class="card-header">
                    <h5>Quote</h5>
                </div>
                <div class="card-body">
                    <blockquote>
                        <p>"Youth can not know how age thinks and feels."</p>
                        <footer class="blockquote-footer">J.K Rowling in <cite title="Source Title">Harry Potter</cite></footer>
                    </blockquote>
                    <a href="" class="btn btn-primary">More Books!</a>
                </div>
                <div class="card-footer text-muted">
                    <p> </p>
                </div>
            </div>
        </div>

    </container>

    <footer>

    </footer>
    <!-- Javascript Separate Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>