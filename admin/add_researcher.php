<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <!-- <h1>Index</h1> -->
    <h3><i class="fas fa-user-plus"></i> เพิ่ม IP Address</h3>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card card-gray">
      <div class="card-header ">
        <h3 class="card-title"><br></h3>
        <div align="right">
        </div>
    </div>
      <!-- <br> -->
      <main class="page-content" style="margin-top:20px">
      <div class="container">
                <main class="page-content" style="margin-top:10px">
                <div class="col-md-12 ">
                <div class="card card-header border bg-white">
                    <h6><i class="fas fa-user-plus"></i>&nbsp เพิ่ม IP Address</h6><br>
                    <form action="chkadd_ipaddress.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <b for="">อุปกรณ์การใช้งานและชื่อ<span class="text-danger">*</span></b>
                                            <input class="form-control bg-white" type="text" placeholder="PC / Notebook / Server . . " name="ip_name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <b for="">ระบบปฏิบัติการ<span class="text-danger">*</span></b>
                                            <input class="form-control bg-white" type="text" placeholder="Operating System" name="ip_os" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <b for="">IP Address<span class="text-danger">*</span></b>
                                            <input class="form-control bg-white" type="text" placeholder="IP Address" name="ipaddress" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-save"></i> <br>บันทึก</button>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                        <button type="reset" class="btn btn-danger btn-block"><i class="fas fa-window-close"></i> <br>ยกเลิก</button>
                                        </div>
                                    </div>
                                </div>      
                            </div>
                        </div>
                        <br>

                    </form>

                </div>
            </div>
            </div>
        </main>    
      <div class="card-footer">
        
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