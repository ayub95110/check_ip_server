<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <!-- <h1>Index</h1> -->
        <h3><i class="fas fa-users" style="font-size:100%;"></i> แสดงข้อมูล IP Address
            <a href="add_researcher.php" class="btn btn-outline-primary"><i class="fas fa-user-plus"></i> เพิ่ม IP
                Address</a>
        </h3>
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
                                <th scope="col" class="text-nowrap">เครื่องมือ</th>
                                <!-- <th scope="col" class="text-nowrap">ระดับผู้ใช้งาน</th> -->
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
                                <td class="text-nowrap" width="15%"><a
                                        href="data_researcher.php?cusid=<?php echo $result['id']?>"
                                        class="btn btn-primary"><i class="fas fa-search-plus"></i></a>&nbsp;<a
                                        href="edit_researcher.php?cusid=<?php echo $result['id']; ?>"
                                        class="btn btn-warning"><i class="fas fa-user-edit"
                                            style="font-size:120%;"></i></a>&nbsp;<a style="color:white;"
                                        href="JavaScript:if(confirm('คุณแน่ใจที่จะลบหรือไม่')==true){window.location='delete_researcher.php?id=<?php echo $result["id"];?>';}"
                                        class="btn btn-danger"><i class="	fas fa-trash-alt"></i></a></td>
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