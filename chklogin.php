<?php
include('connect.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<style>
	p{
		color:red;
	}
	</style>
</head>
<body>
<?php
	function check_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$idcard=check_input($_POST['idcard']);
		
		if (!preg_match("/^[0-9_a-z]*$/",$idcard)) {
			$_SESSION['msg'] = "ชื่อผู้ใช้ไม่ควรมีช่องว่างและอักขระพิเศษ!"; 
			?>
			<script>
			    window.location.href='index.php';
			</script>
			<?php
		}
		else{
			
		$idcard=$idcard;
		
		$password = check_input($_POST["password"]);
		$fpassword=md5($password);
		
		$sql = "SELECT * FROM user_login WHERE idcard = '$idcard' and passwd = '$fpassword'";
		$query = mysqli_query($conn,$sql);
		
		if(mysqli_num_rows($query) == 0){
			$_SESSION['msg'] = "แจ้งเตือน: ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง! กรุณาเข้าระบบอีกครั้ง";
			?>
			<script>
			    window.location.href='index.php';
			</script>
			$row=mysqli_fetch_array($query);
			if($row['status_users'
			<?php
		}
		else{
			$row=mysqli_fetch_array($query);
			if($row['status_users']=="admin"){
				$_SESSION['id']=$row['idcard'];
				
				echo '
					
					<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
					<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
							echo '<script>
							setTimeout(function() {
							swal({
								title: "เสร็จสิ้น",
								text: "ยินดีตอนรับ ผู้ดูแลระบบ",
								type: "success",
								showConfirmButton: true
							}, function() {
								window.location = "admin/"; //หน้าที่ต้องการให้กระโดดไป
							});
						});
						</script>';
						$conn = null;
				?>
				<!-- <script>
					window.alert('ยินดีต้อนรับผู้ดูแลระบบ');
					window.location.href='admin/';
				</script> -->
				<?php
			}else if($row['status_users']!="admin"){
				$_SESSION['id']=$row['idcard'];
				echo '
				<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
						echo '<script>
						setTimeout(function() {
						swal({
							title: "ข้ออภัย",
							text: "คุณเข้าสู่ระบบไม่ตรงกับผู้ใช้",
							type: "error",
							showConfirmButton: true
						}, function() {
							window.location = "index.php"; //หน้าที่ต้องการให้กระโดดไป
						});
					});
					</script>';
					$conn = null;
				?>

				<?php
			}
		}
		
		}
	}
?>
</body>
</html>
