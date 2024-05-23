<?php 
$connect = mysqli_connect("localhost","root","","library_system");

if(isset($_POST['update']) && isset($_FILES['image'])){
    $book_name = $_POST['book_name'];
    $author_name = $_POST['author_name'];
    $publish_name = $_POST['publish_name'];
    $images = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmp_name, "../uploads/".$images);

    $update = "UPDATE book_list SET book_name = '$book_name', author='$author_name',
    publisher_name = '$publish_name',images = '$images' WHERE book_name = '$book_name'";
    $update_run = mysqli_query($connect, $update);

    if($update_run){
        echo '
        <script>
            alert("Data Update");
            window.location.href = "../html/remove_books.php";
        </script>
        ';
    }else{
        echo '
        <script>
            alert("Data is not Updated");
            window.location.href = "../html/teacher.php";
        </script>
        ';
    }
}
$sql = "SELECT * FROM book_list";

$result = $connect->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Books</title>
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
                        <a class="nav-link active" aria-current="page" href="../html/teacher.php">Home</a>
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
        <h1>Update Books from the list</h1>
    </div>

    <br>
    <!-- views to input -->
    <div class="form text-center">

        <form action="#" method="POST" enctype="multipart/form-data">

            <div class="row">
                <div class="col mb-2">
                    <label>Book Name:</label>
                    <input type="text" name="book_name" id="book_name">
                </div>
            </div>
            <div class="row">
                <div class="col mb-2">
                    <label>Author:</label>
                    <input type="text" name="author_name" id="author_name">
                </div>
            </div>
            <div class="row">
                <div class="col mb-2">
                    <label>Publisher:</label>
                    <input type="text" name="publish_name" id="publish_name">
                </div>
            </div>
            <div class="image-upload-box mb-2">
                Upload the Cover Book: <input type="file" name="image" class="btn btn-light">
            </div>
            <div>
                <input type="submit" name="update" value="Update?" class="btn btn-info" style="color:white;">
            </div>
        </form>

    </div>

    <!-- views to input -->
    <div class="d-flex justify-content-center mt-4">
        
        <table class="table-primary text-center" border="1px">
            <tr>
                <th style="padding:1rem; font-size:1rem;">Book Name</th>
                <th style="padding:1rem; font-size:1rem;">Author</th>
                <th style="padding:1rem; font-size:1rem;">Publisher</th>
                <th style="padding:1rem; font-size:1rem;">Images</th>
            </tr>

            <?php
            while($info = $result->fetch_assoc()){

            ?>
            
            
            <tr>
                <td style="padding:1rem;"><?php echo"{$info['book_name']}"?></td>
                <td style="padding:1rem;"><?php echo"{$info['author']}"?></td>
                <td style="padding:1rem;"><?php echo"{$info['publisher_name']}"?></td>
                <td style="padding:1rem;"><img src="../uploads/<?php echo "{$info['images']}";?>" alt="" width="200" height="200" style="object-fit: cover;"></td>
            </tr>
            
            <?php
            }
            ?>


        </table>
    </div>
    



    </container>

    <footer>

    </footer>
    <!-- Javascript Separate Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>