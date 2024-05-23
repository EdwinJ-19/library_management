<?php 
include "connection.php";

if(isset($_POST['delete'])){
    $id = $_POST['id'];

    $query_run = mysqli_query($connect, $query);

    if($query_run){
        echo '
        <script>
            alert("Data Deleted");
            window.location.href = "../html/view_books.php";
        </script>
        ';
    }else{
        echo '
        <script>
            alert("Data is not Deleted");
            window.location.href = "../html/teacher.php";
        </script>
        ';
    }
}

?>