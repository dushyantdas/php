<?php
$username = $_POST['username'];
$pass = $_POST['password'];
$co_pass = $_POST['co-password'];
if($pass == $co_pass){
    $conn = mysqli_connect("localhost", "root", "", "parking_project") or die("connection failed!");
    $SQL = "SELECT * FROM user_info where username = '{$username}' && password = '{$pass}'";
    $result = mysqli_query($conn, $SQL) or die("query failed!");
    $num = mysqli_num_rows($result);
    if($num == 1){
        echo "You already registerd!";
    }else{
        $sql = "INSERT INTO  user_info (username, password) VALUES ('{$username}', '{$pass}')";
        $result = mysqli_query($conn, $sql) or die("query failed!");
        mysqli_close($conn);

        header("location:http://localhost/project/index.php");

    }
}else{
    echo "Your confirm and password is not same!";
}
?>