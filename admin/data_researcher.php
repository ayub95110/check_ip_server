<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <!-- <h1>Index</h1> -->
    <h3>  ดูข้อมูล IP Address</h3>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card card-gray">
      <div class="card-header ">
        <h3 class="card-title">....</h3>
        <div align="right">
  
        </div>
      </div>
      <br>
      <?php
        
        $sql = "SELECT * FROM ip ";
        $query = mysqli_query($conn, $sql);
        $result = mysqli_fetch_array($query);
        
      ?>
      
        <div class="col-md-6 ">
        <div class="card card-header border bg-white">
        <div class="card-body">
        <div class="row">
                            <!-- <div class="col-md-2 mt-2">
                                <div class="text-center col-md-12 mt-2">
                                    <img src="../all_img/users_img/not_avatar.png" class="avatar img-circle img-thumbnail" alt="avatar">
                                    <h6>เลือกรูปโปรไฟล์</h6>
                                    <input type="file" class="text-center center-block file-upload" name="photo">
                                </div>
                            </div> -->
                            <div class="col-md-8">
                                <div class="row">

                                    <!-- <div class="col-md-3">
                                        <b for="">ระดับผู้ใช้งาน</b>
                                        <div class="form-group">
                                        <input type="text"  class="form-control bg-white" placeholder="ระดับผู้ใช้งาน" disabled name="status_users" value="<?php echo $result['status_users'] ?>">

                                    </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <b for="">ชื่อ</b>
                                            <input class="form-control bg-white" type="text" disabled name="name" value="<?php echo $result['uname'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <b for="">นามสกุล</b>
                                            <input type="text" class="form-control bg-white" disabled name="lname" value="<?php echo $result['lname'] ?>" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <b for="">คณะ/หน่วยงาน</b>
                                        <div class="form-group">
                                        <input type="text"  class="form-control bg-white" placeholder="คณะ" disabled name="res_group" value="<?php echo $result['res_group'] ?>">
                                    </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b for="">สาขา</b>
                                        <div class="form-group">
                                        <input type="text"  class="form-control bg-white" placeholder="สาขา" disabled name="res_branch" value="<?php echo $result['res_branch'] ?>">
                                    </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="form-group">
                                            <b for="">อีเมล</b>
                                        <input type="text"  class="form-control bg-white" placeholder="อีเมล" disabled name="res_email" value="<?php echo $result['res_email'] ?>">

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <b for="">เบอร์ติดต่อ</b>
                                            <input class="form-control bg-white" type="text" placeholder="เบอร์ติดต่อ" disabled name="res_tell" value="<?php echo $result["res_tell"]?>">
                                        </div>
                                    </div> -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <b for="">IP Address</b>
                                            <input class="form-control bg-grey" type="text" disabled name="ip" value="<?php echo $result['ipaddress'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <br><a class="btn btn-warning" href="list_researcher.php" role="button">ย้อนกลับ</a></br>

    </div>
    </div>
    
    
    
    
  </section>
  <!-- /.content -->
  
  
  <?php include('footer.php'); ?>
  <script>
  $(function () {
  $(".datatable").DataTable();
  // $('#example2').DataTable({
  //   "paging": true,
  //   "lengthChange": false,
  //   "searching": false,
  //   "ordering": true,
  //   "info": true,
  //   "autoWidth": false,
  // http://fordev22.com/
  // });
  });
  </script>
    <script src="../bootstrap/js/jquery.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <script src="../bootstrap/js/popper.min.js"></script>
  <script src="../bootstrap/js/jquery.dataTables.min.js"></script>
  <script src="../bootstrap/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.js"></script> 

   <script>
   $(document).ready(function() {

    $('#tableid').DataTable();
   } );
   </script> 

</body>
</html>