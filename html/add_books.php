<?php
$data = new mysqli("localhost","root","","library_system");

if(isset($_POST['add_books'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $book_name = $_POST['book_name'];
    $author_name = $_POST['author_name'];
    $return_date = $_POST['return_date'];
    $status = $_POST['status'];

    $sql = "INSERT INTO books(name, email, phone, message, book_name, author, return_date,status) 
    VALUES ('$name', '$email', '$phone', '$message', '$book_name', '$author_name', '$return_date','$status')";

    $result = mysqli_query($data, $sql);

    if($result){
        echo "
            <script>
                alert('Book Added Successfully');
                window.location.href = 'teacher.php';
            </script>";
    }else{
        echo "
            <script>
                alert('Failed to Add Book');
                window.location.href = 'add_books.php';
            </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Books</title>
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
    <link rel="stylesheet" href="../css/teacher.css" type="text/css">
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
                        <a class="nav-link active" aria-current="page" href="teacher.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../api/logout.php">
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
        <h1>Add Books for Student</h1>
    </div>

    <br>

    <div>

    <form action="#" method="POST">

    <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <div class="form-floating mb-5">
                        <input name="name" type="text" class="form-control" id="floatingInput" placeholder="Enter your Name">
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating mb-5">
                        <input name="email" type="email" class="form-control" id="floatingInput" placeholder="Enter your Email">
                        <label for="floatingInput">Email Id</label>
                    </div>
                    <div class="form-floating mb-5">
                        <input name="phone" type="text" class="form-control" id="floatingInput" placeholder="Enter Your Phone">
                        <label for="floatingInput">Phone</label>
                    </div>
                    <div class="form-floating mb-5">
                        <input name="message" type="text" class="form-control" id="floatingInput" placeholder="Enter your Message?">
                        <label for="floatingInput">Message</label>
                    </div>
                    <div class="form-floating mb-5">
                        <input name="book_name" type="text" class="form-control" id="floatingInput" placeholder="Enter the Book Name">
                        <label for="floatingInput">Book Name</label>
                    </div>
                    <div class="form-floating mb-5">
                        <input name="author_name" type="text" class="form-control" id="floatingInput" placeholder="Enter the Author Name">
                        <label for="floatingInput">Author Name</label>
                    </div>
                    <div class="form-floating mb-5">
                        <input name="return_date" type="date" class="form-control" id="floatingInput" placeholder="Teacher or Student?">
                        <label for="floatingInput">Return Date</label>
                    </div>
                    <div class="col-md-12 text-center mb-5">
                        <label for="inputStatus">Status</label>
                        <select name="status" id="status" class="form-select">
                            <option value="0"></option>
                            <option value="1">Pending</option>
                            <option value="2">Returned</option>
                            <option value="3">Not Returned</option>
                        </select>
                    </div>
                    <div class="col-sm mt-6 text-center">
                        <button type="submit" class="btn btn-outline-primary btn-lg" name="add_books">Add Book?</button>
                    </div>
                </div>
            </div>

        <!-- <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name_id">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email_name">
        </div>
        <div>
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone">
        </div>
        <div>
            <label for="message">Message</label>
            <input type="text" name="message" id="message">
        </div>
        <div>
            <label for="book_id">Book Name</label>
            <input type="text" name="book_name" id="book_id">
        </div>
        <div>
            <label for="book_id">Author Name</label>
            <input type="text" name="author_name" id="book_id">
        </div>
        <div>
            <label for="date">Return Date</label>
            <input type="date" name="return_date" id="date">
        </div>

        <div>
            <input type="submit" name="add_books" value="Add Book?">
        </div> -->

    </form>

    </div>


    </container>

    <footer>

    </footer>
    <!-- Javascript Separate Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>