<?php require_once('connect.php'); ?>

<?php
    if (isset($_POST['btnLogin'])) {
        
        $userID = $_POST['txtUName'];
        $password = $_POST['txtPsw'];

        $hashed_password = sha1($password);

        $query = "SELECT password FROM users_login WHERE idcard = '{$userID}' LIMIT 1";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) && mysqli_fetch_assoc($result)['password'] == $password) {
            $msg = "Login Successfully";

            session_start();
            $_SESSION['userID'] = $userID;

            header( "Location:http://localhost/" ); die;
        } else {
            $msg = "Invalid Username or Password";
        }
    }   

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<style type="text/css">
#btn{
	width:100%;
}

</style>
</head>
<body>
<div class="container" style="padding-top:100px">
  <div class="row">
  <div class="col-md-4"></div>
    <div class="col-md-4" style="background-color:#f4f4f4">
    <div style="center">
      <img src="3.jpg" alt="" center width="360">
    </div>
    <h3 align="center">
       <!-- ระบบสารสนเทศเพื่อการติดตามการแก้ปัญหาความยากจน </h3> -->
      <h3 align="center"> 
      <span class="glyphicon glyphicon-lock"> </span>
       เข้าสู่ระบบ </h3>
      <form  name="formlogin" action="chklogin.php" method="POST" class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text"  name="idcard" class="form-control" required placeholder="ชื่อผู้ใช้" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="password" name="password" class="form-control" required placeholder="รหัสผ่าน" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-danger" id="btn">
            <span class="glyphicon glyphicon-log-in"> </span>
             เข้าสู่ระบบ </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!--start footer-->
<!-- <p align="center"> Template by devbanban.com modify from bootstrap </p> -->
<!--end footer--> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed -->
</body>
</html>
