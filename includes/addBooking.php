<?php
    session_start();
    include_once 'connect_sql.php';
    $cust_id = (int)$_SESSION['Cust_id'];
    $park_id = (int)$_POST['park_id'];
    $s_time = str_replace(':','',$_POST['s_time']);
    $e_time =str_replace(':','',$_POST['e_time']);
    $reg_no = mysqli_real_escape_string($conn,$_POST['reg_no']);
    $price = (int)$_POST['price']; 
    if($s_time>2400)
    {
        $s_time = $s_time/100;
    }
    if($e_time>2400)
    {
        $e_time = $e_time/100;
    }
    $sql ="INSERT INTO booking (Cust_id , park_id, s_time,
    e_time, reg_no, price) VALUES ($cust_id,$park_id,$s_time,$e_time,'$reg_no',$price)";
    $result = mysqli_query($conn,$sql);
     
    $resultCheck = mysqli_num_rows($result);
    echo $sql;
    if($resultCheck!=1){
        header("location: ../index.php?error=some error");
            exit();
    }else{
        header("location: ../index.php?success=booking confirmed");
            exit();
    }   
