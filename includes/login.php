<?php
if(isset($_POST['submit'])){

    include 'connect_sql.php';
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pwd = mysqli_real_escape_string($conn,$_POST['password']);

    //check if empty
    if(empty($email) || empty($pwd)){
        header("location: ../index.php?signup=empty");
        exit();
    }else{
        $sql ="SELECT * FROM customer WHERE email='$email'";
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_affected_rows($result);
        if($resultCheck<1){
            header("location: ../index.php?signup=error");
            exit();
        }else{
            if($row = mysqli_fetch_assoc($result)){
                
            }
        }
    }
}else{
    header("location: ../index.php?signup=error");
     exit();
}