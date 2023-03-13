<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>โรงพยาบาลกะพ้อ</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets1/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets1/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets1/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets1/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-3 py-3">
              <div class="text-center">
                <img src="1.jpg"  class="rounded-circle" alt="" width="200"  height="200"> 
              </div>
                <br>
                <h3 class="card-title text-center mb-3">ระบบบริหารจัดการเซิร์ฟเวอร์</h3>
                <h3 class="card-title text-center mb-2">เข้าสู่ระบบ</h3><br>
                <form name="formlogin" action="chklogin.php" method="POST" class="form-horizontal">
                  <div class="form-group">
                    <label>Username *</label>
                    <input type="text"  name="idcard" class="form-control p_input" required placeholder="ชื่อผู้ใช้">
                  </div>
                  <div class="form-group">
                    <label>Password *</label>
                    <input type="password"  name="password" class="form-control p_input" required placeholder="รหัสผ่าน" />
                  </div>
                  <!-- <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <a href="#" class="forgot-pass">Forgot password</a>
                  </div> -->
                  <br>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
                  </br> 
                  <!-- <div class="d-flex">
                    <button class="btn btn-facebook mr-2 col">
                      <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button>
                  </div> -->
                  <!-- <p class="sign-up">Don't have an Account?<a href="#"> Sign Up</a></p> -->
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets1/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets1/js/off-canvas.js"></script>
    <script src="assets1/js/hoverable-collapse.js"></script>
    <script src="assets1/js/misc.js"></script>
    <script src="assets1/js/settings.js"></script>
    <script src="assets1/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>