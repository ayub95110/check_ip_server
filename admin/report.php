<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <!-- <h1>Index</h1> -->
        <h3><i class="fas fa-clipboard-list" style="font-size:100%;"></i> รายงาน </h3>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="card card-gray">
        <div class="card-header ">
            <!-- <h3 class="card-title">....</h3> -->
            <!-- <form>
                    <div class="row justify-content-end">
                        <div class="col-auto">
                            <label for="search" class="col-form-label">ใส่ข้อมูลเพื่อค้นหา</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" id="search" name="search" >
                          </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary">ค้นหา</button>
                        </div>
                        <div class="col-auto">
                            <a href="index.php" class="btn btn-danger">เครียร์</a>
                        </div>
                    </div>
                </form> -->
            <h3 class="card-title"><br></h3>
            <div align="right">

            </div>
        </div>
        <br>
        <div class="card-body">
            <div class="row">

                <div class="table-responsive custom-table-responsive">
                    <table id="tableid" class="table table-hover text-center">
                        <thead class="table">
                            <tr>
                                <th scope="col" class="text-nowrap">ลำดับที่</th>
                                <th scope="col" class="text-nowrap">ชื่ออุปกรณ์การใช้งาน</th>
                                <th scope="col" class="text-nowrap">ปฏิบัติการ</th>
                                <th scope="col" class="text-nowrap">IP Address</th>
                                <th scope="col" class="text-nowrap">เวลา</th>
                                <th scope="col" class="text-nowrap">สถานะ</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            <?php
                include "../connect.php";
                  $sql = "SELECT * FROM log JOIN ip WHERE log.id_ip = ip.ipaddress
                  ORDER by date_time ";
                  // echo '<pre>';
                  // print_r($sql);
                  // echo'</pre>';
                  // exit();
                  $query = mysqli_query($conn,$sql);
                  $i = 1;
                  while($result=mysqli_fetch_array($query)){
                ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td class="text-nowrap"> <?php echo $result['ip_name']?> </td>
                                <td class="text-nowrap"> <?php echo $result['ip_os']?> </td>
                                <td class="text-nowrap"> <?php echo $result['id_ip']?> </td>
                                <td class="text-nowrap"> <?=$result['date_time'];?> </td>
                                <td class="text-nowrap" width="15%"> <?php if($result['log_status'] == '1' ) 
                  {  ?>
                                    <button type="button" class="btn btn-success">active</button>

                                    <?php  
                }
                  else{ ?><button type="button" class="btn btn-danger">down</button>
                                    <?php
                  }
                  ?>
                                </td>


                            </tr>
                            <?php
                  }          
       ?>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>




</section>
<!-- /.content -->


<?php include('footer.php'); ?>
<script>
$(function() {
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
});
</script>

</body>

</html>