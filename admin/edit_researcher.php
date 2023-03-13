<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <!-- <h1>Index</h1> -->
    <h3><i class="fas fa-user-plus"></i> แก้ไข IP Address</h3>
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
            // $sql = " SELECT * FROM researcher INNER JOIN user_login on user_login.idcard = researcher.idcard WHERE user_login.idcard = '".$_GET["cusid"]."' ";
            $sql = "SELECT * FROM ip where id = '".$_GET["cusid"]."' ";
            $query = mysqli_query($conn, $sql);
            $result = mysqli_fetch_array($query);
            
            ?>
        <main class="page-content" style="margin-top:20px">
        <div class="col-md-6 ">
        <div class="card card-header border bg-white">
                    <form action="chk_edit_researcher.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            
                            <div class="col-md-8">
                                <div class="row">
                                    
                                    <!-- <div class="col-md-3">
                                    <div class="form-group">
                                        <b for="">เลือกระดับผู้ใช้งาน</b>
                                        <input type="text"  class="form-control bg-white" placeholder="เลือกระดับผู้ใช้งาน" name="status_users" value="<?php echo $result['status_users'] ?>">
                                    </div>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <b for="">ชื่อ<span class="text-danger">*</span></b>
                                            <input class="form-control bg-white" type="text" placeholder="ชื่อ" name="uname" value="<?php echo $result['uname'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <b for="">นามสกุล<span class="text-danger">*</span></b>
                                            <input type="text" class="form-control bg-white" placeholder="นามสกุล" name="lname" value="<?php echo $result['lname'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                    <div class="form-group">
                                        <b for="">คณะ/หน่วยงาน</b>
                                        <input type="text"  class="form-control bg-white" placeholder="คณะ" name="res_group"" value="<?php echo $result['res_group'] ?>">
                                    </div>
                                    </div>
                                    <div class="col-md-3">
                                    <div class="form-group">
                                        <b for="">สาขา</b>
                                        <input type="text"  class="form-control bg-white" placeholder="สาขา" name="res_branch" value="<?php echo $result['res_branch'] ?>">
                                    </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <b for="">อีเมล</b>
                                            <input type="text"  class="form-control bg-white" placeholder="อีเมล" name="res_email" value="<?php echo $result['res_email'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <b for="">เบอร์ติดต่อ<span class="text-danger">*</span></b>
                                            <input class="form-control bg-white" type="text" placeholder="เบอร์ติดต่อ" name="res_tell" maxlength="10" value="<?php echo $result['res_tell'] ?>">
                                        </div>
                                    </div> -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <b for="">IP Address</b>
                                            <input class="form-control bg-grey" type="text" placeholder="ไอพีแอดเดรส" name="ipaddress" value="<?php echo $result['ipaddress'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <input type="hidden" name="photo" value="not_avatar.png">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> บันทึก</button>&nbsp;&nbsp;<a class="btn btn-warning" href="list_researcher.php" role="button">ย้อนกลับ</a>
                        
                                    <input type="hidden" name="idcardedit" value="<?php echo $result["id"]?>">
                                    <!-- <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary"><b>แก้ไขข้อมูล</b></button>&nbsp;&nbsp;<a class="btn btn-warning" href="list_researcher.php" role="button">ย้อนกลับ</a>
                                    </div> -->
                    </form>

                </div>
            </div>
            </main>
            </div><br>
                    </div>
                                    
             </form>

        </div>    
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