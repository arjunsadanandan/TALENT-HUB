<?php
include "talenthubconnect.php";
$sql=mysqli_query($con,'select * from college');
if (isset($_POST['submit'])){
    $username=$_POST['user_name'];
    $password=$_POST['password'];
    $type=$_POST['type'];
    $data=mysqli_query($con,"select * from login where USER_NAME='$username' and PASSWORD='$password'");
if(mysqli_num_rows($data)>0){
  header("location:college.php");
}
}


function data_uri ($file, $mime) {
    $contents = file_get_contents ($file);
    $base64 = base64_encode ($contents);
    return ('data:' . $mime . ';base64,' . $base64);
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - add department</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block"><img src="<?php echo data_uri ('d:\xampp\htdocs\task\images\Screenshot (5).png','image/png'); ?>" height="417px" width="470px" alt="An imag"/></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Login</h1>
                            </div>
                            <form class="user" method="post">
                                <div class="form-group row">
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="user name" name="user_name">
                                </div>
                                <div class="form-group row">
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="password" name="password">
                                </div>
                                <div class="form-group row">
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="type" name="type">
                                </div>
                                
                                        
                                    <tr>
                                        <td>
                                <a href="admin.php" name="submit" class="btn btn-outline-primary" text="center">login</button>               
                                 <a href="module.php" name="submit" class="btn btn-outline-primary">Back</a>  
                    </td>
                </tr>
                    </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>