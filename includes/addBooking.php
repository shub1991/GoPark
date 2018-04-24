<?php
    session_start();
    include_once 'connect_sql.php';
    $cust_id = $_SESSION['Cust_id'];
    $park_id = $_POST['park_id'];
    $s_time = $_POST['s_time'];
    $e_time = $_POST['e_time'];
    $reg_no = mysqli_real_escape_string($conn,$_POST['reg_no']);
    $price = $_POST['price']; 
    
    $sql ="INSERT INTO booking (s_time,
    e_time, reg_no, price) VALUES ('$s_time','$e_time','$reg_no','$price')";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck<1){
        header("location: ../index.php?error="+$cust_id+" "+$park_id+" "+$s_time+" "+$e_time+" "+$reg_no+" "+$price);
            exit();
    }else{
        header("location: ../index.php?success=booking confirmed");
            exit();
    }   
