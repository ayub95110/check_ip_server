<?php include("header.php"); 

$sql_ip = "SELECT count(ip_status) AS total_ip_status
FROM ip "; 
$result_ip = mysqli_query($conn,$sql_ip); 
$row_ip = mysqli_fetch_array($result_ip); 

$sql_ip1 = "SELECT count(ip_status) AS total_ip_status1
FROM ip Where 	ip_status = 1 "; 
$result_ip1 = mysqli_query($conn,$sql_ip1); 
$row_ip1 = mysqli_fetch_array($result_ip1); 

$sql_ip2 = "SELECT count(ip_status) AS total_ip_status2
FROM ip Where 	ip_status = 2 "; 
$result_ip2 = mysqli_query($conn,$sql_ip2); 
$row_ip2 = mysqli_fetch_array($result_ip2); 
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <h3><i class="fas fa-home" style="font-size:100%;"></i> หน้าหลัก</h3>
    </div>
</section>
<!-- Main content -->
<section class="content">
    <div class="card card-gray">
        <div class="card-header ">
            <h3 class="card-title"><br></h3>
            <div align="right">
            </div>
        </div>
        <br>
        <div class="card-body">
            <div class="row">
                <div class="col-xl-3">
                </div>
                <div class="col-xl-6">
                    <div class="card card-statistics bg-secondary">
                        <div class="card-body" style="background-color: #DCDCDC;">
                            <div class="clearfix ">
                                <div class="float-left">
                                    <h2 class="text-dark">
                                        <i class="fa fa-desktop" aria-hidden="true"></i>
                                        &nbsp จำนวนเครื่องทั้งหมดในโรงพยาบาล
                                    </h2>
                                </div>
                                <div class="float-right">
                                    <p class="card-text text-dark">จำนวน</p>
                                    <h4 class="bold-text text-right text-dark">
                                        <?php echo $row_ip['total_ip_status'];?> &nbsp เครื่อง
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card card-statistics bg-secondary">
                        <div class="card-body" style="background-color: #DCDCDC;">
                            <div class="clearfix ">
                                <div class="float-left">
                                    <h2 class="text-dark">
                                        <i class="fa fa-desktop" aria-hidden="true"></i>
                                        &nbsp จำนวนเครื่องที่เชื่อมต่อ
                                    </h2>
                                </div>
                                <div class="float-right">
                                    <p class="card-text text-dark">จำนวน</p>
                                    <h4 class="bold-text text-right text-dark">
                                        <?php echo $row_ip1['total_ip_status1'];?> &nbsp เครื่อง
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card card-statistics bg-secondary">
                        <div class="card-body" style="background-color: #DCDCDC;">
                            <div class="clearfix ">
                                <div class="float-left">
                                    <h2 class="text-dark">
                                        <i class="fa fa-desktop" aria-hidden="true"></i>
                                        &nbsp จำนวนเครื่องที่ล่ม
                                    </h2>
                                </div>
                                <div class="float-right">
                                    <p class="card-text text-dark">จำนวน</p>
                                    <h4 class="bold-text text-right text-dark">
                                        <?php echo $row_ip2['total_ip_status2'];?> &nbsp เครื่อง
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                        <th scope="col" class="text-nowrap">สถานะ</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    <?php
                    include "../connect.php";
                    $sql = "SELECT * FROM ip";
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
                                        <td class="text-nowrap"> <?php echo $result["ip_name"]?> </td>
                                        <td class="text-nowrap"> <?php echo $result["ip_os"]?> </td>
                                        <td class="text-nowrap"> <?php echo $result["ipaddress"]?> </td>
                                      
                                        <td class="text-nowrap"> 
                                        <?php if($result['ip_status'] == '1' ) {  ?>
                                          <button type="button" class="btn btn-success">เชื่อมต่อ</button> 
                                        <?php } else { ?>
                                          <button type="button" class="btn btn-danger">ไม่เชื่อมต่อ</button>
                                        <?php } ?> 
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
            
            <div class="card-footer">
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

    $('#tableid').DataTable({
      bFilter: false, bInfo: false, bPaginate: false
      
    
    });
});
</script>
</body>

</html>