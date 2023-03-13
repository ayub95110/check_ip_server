<?php
include '../connect.php';

// echo '<pre>';
// print_r($_POST);
// echo'</pre>';
// exit();
$name_word = $_POST["name_word"];
$uname= $_POST["uname"];
$lname= $_POST["lname"];
$res_tell = $_POST["res_tell"];
$idcard= $_POST["idcard"];
$res_email= $_POST["res_email"];
$res_group= $_POST["res_group"];
$res_branch= $_POST["res_branch"];
$passwd= $_POST["passwd"];
$photo = $_POST["photo"];

// if($_POST["passwd"] != $_POST["comfirm-passwd"])
// {
//     echo "
//         <script>
//             alert('รหัสผ่านไม่ตรงกัน');
//             window.history.back();
//         </script>";   
//         exit();
// }else{
//     $passwd = md5($_POST["passwd"]);
// }

$photo = $_POST["photo"];
$status_users = $_POST["status_users"];

$ext = pathinfo(basename($_FILES['photo']['name']), PATHINFO_EXTENSION);
if($ext !=''){
$new_img_name = 'img_'.uniqid().".".$ext;
$image_path = "../all_img/users_img/";
$upload_path = $image_path.$new_img_name;
move_uploaded_file($_FILES['photo']['tmp_name'], $upload_path);
$photo = $new_img_name;
}else{
    $new_img_name=$photo;
}

$check = "SELECT idcard
          FROM user_login 
          WHERE idcard = '$idcard'";
$check_num = mysqli_query($conn, $check);
$num = mysqli_num_rows($check_num);
if($num > 0){
    echo "<script>";
    echo "alert('รหัสบัตรประชาชนซ่ำกับผู้ใช้อื่น! กรุณาแก้ไขใหม่อีกครั้ง');";
    echo "window.history.back();";
    echo "</script>";
}else{
    $sql = "INSERT INTO researcher (idcard, uname, lname, res_email, res_tell, res_group, res_branch, photo, status_users) 
    VALUES ('$idcard','$name_word $uname','$lname', '$res_email', '$res_tell', '$res_group', '$res_branch', '$photo', '$status_users')";
    $query = mysqli_query($conn, $sql);
    
    $sql1 = "INSERT INTO user_login (idcard, passwd, name, lastname, photo, status_users) 
    VALUES ('$idcard', '$passwd', '$uname', '$lname', '$photo', '$status_users')";
    $query = mysqli_query($conn, $sql1);
    
    
    mysqli_close($conn);
    
    //     echo '<pre>';
    //     print_r($sql);
    //     echo'</pre>';
    //     exit();
    
    
    if($query){
        echo "
        <script>
            alert('เพิ่มข้อมูลเรียบร้อยแล้ว');
            window.location = 'list_researcher.php';
        </script>";   
    }else{
        echo "
        <script>
            alert('ไม่สำมารถเพิ่มข้อมูล');
            //window.location = 'list_researcher.php';
        </script>";   
    }
    else{
        echo '<script>
              setTimeout(function() {
               swal({
                   title: "เกิดข้อผิดพลาด",
                   type: "error"
               }, function() {
                   window.location = "edit_researcher.php"; //หน้าที่ต้องการให้กระโดดไป
               });
             }, 1000);
         </script>';
     }
     $conn = null; //close connect db
     } //isset
}



// $sql = "INSERT INTO users SET
// uname = '$uname',
// lname = '$lname',
// mail_tc = '$mail_tc',
// idcard = '$idcard',
// number_tc = '$number_tc',
// passwd = '$passwd',
// photo = '$photo',
// status_users= '$status_users'
// ";
// $query = mysqli_query($conn, $sql);



?>