<?php 

session_start(); 
include "config.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data){

       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);

       return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: index.php?error=User Name is required");
        exit();
    }
    else if(empty($pass)){
        header("Location: index.php?error=Password is required");
        exit();
    }
    else{
        $pass = md5($pass);
        $sql = "SELECT * FROM `login` WHERE `user_name`='$uname' AND `password` = '$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['user_name'] === $uname && $row['password'] === $pass) {
                echo "Logged in!";

                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];

                header("Location: records_html.php");
                exit();
            }
            else{
                header("Location: index.php?error=Incorect User name or password");
                exit();
            }
        }
        else{
            header("Location: index.php?error=Incorect User name or password");
            exit();
        }
    }
}
else{
    header("Location: index.php");
    exit();
}
