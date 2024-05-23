<?php
    // include("connection.php");

    // $email = $_POST['email'];
    // $username = $_POST['username'];
    // $password = $_POST['password'];
    // $confirm_password = $_POST['con_password'];
    // $gender = $_POST['gender'];
    // $in_cred = $_POST['in_cred'];
    // $user_id = $_POST['user_id'];

    // $sql = "INSERT INTO login_creds(email, username, password, gender, credentials, user_id) 
    // VALUES ('$email', '$username', '$password', '$gender', '$in_cred', '$user_id')";


    // if($connect->query($sql) == true){
    //     echo "
    //         <script>
    //             alert('Registration Successfull');
    //             window.location.href = '../html/login.html;
    //         </script>
    //     ";
    // }else{
    //     echo "
    //         <script>
    //             alert('Registration Failed');
    //             window.location.href = '../html/register.html';
    //         </script>    
    //     ";
    // }

//Get form data
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$in_cred = $_POST['in_cred'];
$user_id = $_POST['user_id'];

$conn = new mysqli("localhost","root","","library_system");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
    echo "Connected";
}

//to check first whether there is an existing email,username or user_id in the database.
$check_sql = "SELECT * FROM login_creds where email ='$email' or username = '$username' or user_id = '$user_id'";
$check_request = $conn->query($check_sql);

if ($check_request -> num_rows > 0){
    echo "
        <script>
            alert ('Email, Username or User Id already exists');
            window.location.href = '../html/register.php';
        </script>
    ";
}else{
//for new entry in the database.
    // Prepare SQL query
$sql = "INSERT INTO login_creds(email, username, password, gender, credentials, user_id) 
        VALUES ('$email', '$username', '$password', '$gender', '$in_cred', '$user_id')";

// Execute SQL query
if ($conn->query($sql) === TRUE) {
  echo "
    <script>
        alert('Registration Successfull');
        window.location.href = '../html/login.php';
    </script>
  ";
} else {
  echo "
    <script>
        alert('Registration Failed');
        window.location.href = '../html/register.php';
    </script>
  ";
}    
}
?>