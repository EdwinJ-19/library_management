<?php

    session_start();
    include("connection.php");

    $username = $_POST['username'];
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];
    $in_cred = $_POST['in_cred'];

    $check = mysqli_query($connect,"SELECT * FROM login_creds WHERE username = '$username' AND user_id = '$user_id' AND password = '$password' AND credentials = '$in_cred' ");
    if(mysqli_num_rows($check)>0){
        $userdata = mysqli_fetch_array($check);
        $groups = mysqli_query($connect,"SELECT * FROM login_creds WHERE credentials = '$in_cred'");
        $groupsdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);

        $_SESSION['userdata'] = $userdata;
        $_SESSION['groupsdata'] = $groupsdata;

        //store the user's role in a session variable
        $_SESSION['in_cred'] = $userdata['credentials']; 

        
        echo "
            <script>
                window.location.href = '../html/index.php'
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Invalid Credentials or Invalid Data');
                window.location.href = '../html/login.php');
            </script>
        ";
    }
?>