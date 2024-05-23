<?php
session_start();
$data = new mysqli("localhost","root","","library_system");

$check_name = $_SESSION['userdata']['username'];
$sql = "SELECT * from books JOIN login_creds on books.name = login_creds.username WHERE books.name = '$check_name'";

$result = $data->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alloted Books</title>
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
    <link rel="stylesheet" href="../css/student.css" type="text/css">
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
                        <a class="nav-link active" aria-current="page" href="../html/student.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                            <!-- Log In <ion-icon name="log-in-outline"></ion-icon> -->
                            Log out<i class="fas fa-sign-in-alt"></i>
                        </a>
                    </li>
                </ul>
            </div>
        
        </div>
    </nav>

    <!-- container -->
    <container>

    <div class="text-center">
        <h1>Books that are alloted by you!</h1>
    </div>

    <br>

    <div class="d-flex justify-content-center">
        
        <table class="table-primary text-center" border="1px">
            <tr>
                <th style="padding:1rem; font-size:1rem;">Name</th>
                <th style="padding:1rem; font-size:1rem;">Email</th>
                <th style="padding:1rem; font-size:1rem;">Phone</th>
                <th style="padding:1rem; font-size:1rem;">Message</th>
                <th style="padding:1rem; font-size:1rem;">Books-Name</th>
                <th style="padding:1rem; font-size:1rem;">Author</th>
                <th style="padding:1rem; font-size:1rem;">Return Date</th>
                <th style="padding:1rem; font-size:1rem;">Returned?</th>
            </tr>

            <?php
            while($info = $result->fetch_assoc()){

            ?>
            

            <tr>
                <td style="padding:1rem;"><?php echo"{$info['name']}"?></td>
                <td style="padding:1rem;"><?php echo"{$info['email']}"?></td>
                <td style="padding:1rem;"><?php echo"{$info['phone']}"?></td>
                <td style="padding:1rem;"><?php echo"{$info['message']}"?></td>
                <td style="padding:1rem;"><?php echo"{$info['book_name']}"?></td>
                <td style="padding:1rem;"><?php echo"{$info['author']}"?></td>
                <td class="table-danger" style="padding:1rem;"><?php echo"{$info['return_date']}"?></td>
                <td style="padding:1rem;"><?php echo"{$info['status']}"?></td>
                <!-- <td style="padding:1rem;"><a href="#" name="yes">YES</a> or <a href="#" name="no">NO</a></td> -->
            </tr>
            
            <?php
            }
            ?>


        </table>

    </div>
    <h5 style="text-align:center; margin:1rem 0 0 0;">Returned Key:</h5>
    <div class="text">
        <p class="yellow" style="color:#C2A83E;">1: Pending</p>
        <p class="green" style="color:green;">2: Returned</p>
        <p class="red" style="color:red;">3: Not Returned</p>
    </div>


    </container>

    <footer>

    </footer>
    <!-- Javascript Separate Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>