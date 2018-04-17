<?php 
 session_start();
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>go park</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
        crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="aonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js" integrity="sha384-lZmvU/TzxoIQIOD9yQDEpvxp6wEU32Fy0ckUgOH4EIlMOCdR823rg4+3gWRwnX1M"
        crossorigin="anonymous"></script>
     <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>

<body>
    <nav class="row navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="resource/img/logo.jpg" width="60" height="60" alt="">
        </a>
        <div class="col-md-6"><?php include 'header.php';?>
        </div>
    </nav>
    <?php 
         if(isset($_SESSION['Cust_id'])){
            include('main.php');
         }
         else {
            include('register.php');
         }
    
    ?>
</body>

</html>