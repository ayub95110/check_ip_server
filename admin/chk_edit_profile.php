<?php
include 'session.php';

// echo '<pre>';
// print_r($_POST);
// echo'</pre>';
// // exit();
if($_POST["passwd"] != $_POST["comfirm-passwd"])
{
    echo "
        <script>
            alert('รหัสผ่านไม่ตรงกัน!! กรุณาใส่รหัสผ่านอีกครั้ง');
            window.history.back();
        </script>";   
        exit();
}else{
    $passwd = md5($_POST["passwd"]);
}
$idcardedit = $_POST["idcardedit"];
$name= $_POST["name"];
$lastname= $_POST["lastname"];
$idcard= $_POST["idcard"];
$photo = $_POST["photo"];


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






// $date1 = date("Ymd_His");
// $numrand = (mt_rand());
// $photo= (isset($_POST["photo"]) ? $_POST['photo'] : '');
// $upload= $_FILES['photo'] ['name'];
// if($upload !=''){
//     $path="../admin";
//     $type = strrchr($_FILES['photo'] ['name'],".");
//     $newname = $numrand.$date1.$type;
//     $path_copy=$path.$newname;
//     $path_link="../admin".$newname;

//     move_uploaded_file($_FILES['photo'] ['photo'],$path_copy);
// }else{
//     $photo = $newname;
// }



   

$sql = "UPDATE user_login SET
idcard = '$idcard',
name = '$name',
lastname = '$lastname',
passwd =  '$passwd',
photo = '$photo'
WHERE idcard = '".$_SESSION['id']."'
";
$query = mysqli_query($conn, $sql);

    // echo '<pre>';
    // print_r($sql);
    // echo'</pre>';
    // exit();

    if($query){
        $_SESSION['id'] = $idcard;
        echo "
        <script>
            alert('แก้ไขข้อมูลเรียบร้อย !!');
            window.location = 'edit_profile.php';
        </script>";   
    }else{
        echo "
        <script>
            alert('แก้ไขไม่สำเร็จ');
            window.location = 'edit_profile.php';
        </script>";   
    }

?>