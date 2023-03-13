<div class="modal fade mt-5" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">เปลี่ยนรหัสผ่านใหม่</h4>
          <button type="button" class="close" data-bs-dismiss="modal">&nbsp;×&nbsp;</button>
        </div><br>
	<form action="chk_edit_passwd.php" method="post" enctype="multipart/form-data">
      <div class="container" >
	  	<div class="row">
		  <div class="col-6">
            <div class="form-group">
                <label for="">รหัสผ่าน</label>
                <input type="password" class="form-control" name="passwd" placeholder="รหัสผ่าน">              
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
                <label for="">ยืนยันรหัสผ่าน</label>
                <input type="password" class="form-control" name="comfirm-passwd" placeholder="ยืนยันรหัสผ่าน">
                                    
            </div>
          </div>			  
		</div>
	  </div>
        <!-- Modal footer -->
        <div class="modal-footer">
		  <button type="submit" class="btn btn-success">เปลี่ยนรหัสผ่าน</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ยกเลิก</button>
        </div>
		</form>
        
      </div>
    </div>
  </div>