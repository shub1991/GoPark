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
</head>

<body>
    <nav class="row navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="">
        </a>
        <div class="col-md-6"><?php include 'header.php';?>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
                sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            </div>
            <div class="col-md-6">
                <form action="includes/signup.php " method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="firstName" placeholder="First name" >
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="lastName" placeholder="last name">
                        </div>
                    </div>
                    <div class="form-group ">
                        <input type="text" class="form-control" name="regEmail" placeholder="enter email" required>
                    </div>
                    <div class="form-group ">
                        <input type="text" class="form-control" name="phone" placeholder="enter phone no.">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="password" class="form-control" name="password" placeholder="password" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="password" class="form-control" name="confirmPassword" placeholder="confirm password" required>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>