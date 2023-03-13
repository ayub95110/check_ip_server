<?php 
$menu = ""
?>
<?php include("header.php"); ?>

<?php 

// $user = $_SESSION['id'];

$sql = "SELECT * FROM user_login WHERE idcard ='".$_SESSION['id']."' ";

$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_array($query);
//echo $row['mem_name'];
//echo ($query_member);//test query




?>
<script src="http://code.jquery.com/jquery-latest.js"></script>
      <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <h1>ข้อมูลส่วนตัว</h1>
      </div><!-- /.container-fluid -->
    </section>



    <!-- Main content -->
    <section class="content">

    <div class="card card-gray">
            <div class="card-header ">
              <h3 class="card-title">แก้ไขข้อมูลส่วนตัว</h3>
              
            </div>
            <br>
            <div class="card-body">

              <div class="row">
                 
                 <div class="col-md-8">
                   <form action="chk_edit_profile.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="member" value="edit_profile">
                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                    <input type="hidden" name="idcard" value="<?php echo $row['idcard'];?>">

                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">ชื่อ </label>
                    <div class="col-sm-5">
                      <input type="text" name="name" class="form-control" id="name" placeholder="" value="<?php echo $row['name'];?>">
                      
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">นามสกุล </label>
                    <div class="col-sm-5">
                      <input type="text" name="lastname" class="form-control" id="lastname" placeholder="" value="<?php echo $row['lastname'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">สถานะ </label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control" name="status" value="<?php echo $row["status_users"];?>" disabled>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Password </label>
                    <div class="col-sm-5">
                      <input type="password" class="form-control" name="passwd" placeholder="รหัสผ่าน"><br>
                      <input type="password" class="form-control" name="comfirm-passwd" placeholder="ยืนยันรหัสผ่าน">                  
                      <!-- <input type="password" name="password" class="form-control" id="password" placeholder="เปลี่ยนรหัสผ่าน"> -->
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">img</label>
                    <div class="col-sm-4">ภาพเก่า<br><br>

                        <img src="../all_img/users_img/<?php echo $row['photo'];?>" width="150px">
                        <input type="hidden" name="photo" value="<?php echo $row['photo'];?>">
                        <br><br>
                    </div>
                  </div>



                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">img</label>
                    <div class="col-sm-4">
                     
                  
                  
            
                  เลือกไฟล์ใหม่<br>


                  <div class="custom-file">
                          <input type="file" class="custom-file-input" id="photo" name="photo" onchange="readURL(this);" >
                          <label class="custom-file-label" for="file">Choose file</label>
                        </div>
                        <br><br>
                    <img id="blah" src="#" alt="your image" width="300" />
                    </div>
                  </div>
                  <input type="hidden" name="idcardedit" value="<?php echo $result["idcard"];?>">

                  <button type="submit" class="btn btn-primary ">อัพเดท</button>
                  </form>

                    

                  
                 
            
                    
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
  
</body>
</html>


<!-- http://fordev22.com/ -->