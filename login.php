<?php

    include ('config/connection.php');

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(empty($username) || empty($password)) {
            // return to login page when field are empty
            header("location:index.php?login_error=All fields are required");
        }
        else {
            $login_query = mysqli_query($connection, "SELECT * FROM tbl_user 
                WHERE username = '$username '
                AND  password = '$passowrd'");
            $count_user = mysqli_num_rows($login_query);
            $userdata = mysqli_fetch_assoc($login_query);

            if($count_user) {
                $_SESSION['auth'] = true;
                $_SESSION['userData'] = $userdata;
                header("location:panel/");
            }

            else {
                header("location:index.php?login_error=Invalid username or password");
                echo "error3 j";
            }
        }
    }
?>