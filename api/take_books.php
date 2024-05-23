<?php
$connect = new mysqli("localhost","root","","library_system");

if(isset($_POST['add_books'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $book_name = $_POST['book_name'];
    $author_name = $_POST['author_name'];
    $return_date = $_POST['return_date'];

    $sql = "INSERT INTO books(name,email,phone,message,book_name,author,return_date) 
    values ('$name','$email','$phone','$message','$book_name','$author_name','$return_date')";
    $result = mysqli_query($connect, $sql);

    if($result){
        echo "
        <script>
            alert('Book Alloted Successfully, Please wait it will redirect to Home Page');
            window.location.href = '../html/student.php';
        </script>
        ";
    }else{
        echo "
        <script>
            alert('Failed to Allot the Book, Please try again');
            window.location.href = 'take_books.php';
        </script>
        ";
    
    }
}

$sql1 = "SELECT * FROM book_list";
$result1 = mysqli_query($connect,$sql1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take the Books</title>
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
    <link rel="stylesheet" href="../css/take_books.css" type="text/css">
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
        <h1>Fill the form</h1>
        <p>In order to take the book.</p>
    </div>

    <br>

    <div>

    <form action="#" method="POST">

    <div class="row justify-content-md-center">
        <div class="col-md-5">
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
            <!-- <div class="form-floating mb-5">
                <input name="book_name" type="text" class="form-control" id="floatingInput" placeholder="Enter the Book Name">
                <label for="floatingInput">Book Name</label>
            </div>
            <div class="form-floating mb-5">
                <input name="author_name" type="text" class="form-control" id="floatingInput" placeholder="Enter the Author Name">
                <label for="floatingInput">Author Name</label>
            </div> -->
            <div class="col-md-12 text-center mb-5">
                <label for="forBook" class="form-label">Select the Book</label>
                <select name="book_name" id="inputBook" class="form-select">
                <?php 
                    if($result1->num_rows>0){
                        while($info = $result1->fetch_assoc()){
                            echo "<option value='".$info['book_name']."'>".$info['book_name']."</option>";
                    }}
                    $result1->data_seek(0);
                    ?>
                </select>
            </div>
            <div class="col-md-12 text-center mb-5">
                <label for="forAuthor" class="form-label">Select the Author</label>
                <select name="author_name" id="inputAuthor" class="form-select">
                <?php 
                    if($result1->num_rows>0){
                        while($info = $result1->fetch_assoc()){
                            echo "<option value='".$info['author']."'>".$info['author']."</option>";
                    }}
                    ?>
                </select>
            </div>
            <div class="form-floating mb-5">
                <input name="return_date" type="date" class="form-control" id="floatingInput" placeholder="Teacher or Student?">
                <label for="floatingInput">Return Date</label>
            </div>
            <div class="col-sm mt-6 text-center">
                <button type="submit" class="btn btn-outline-primary btn-lg" name="add_books">Add Book?</button>
            </div>
        </div>
    </div>
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