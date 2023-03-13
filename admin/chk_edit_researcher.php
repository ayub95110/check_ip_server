<?php
include '../connect.php';

// echo '<pre>';
// print_r($_POST);
// echo'</pre>';
// // exit();
$ipaddress = $_POST["ipaddress"];
$idcardedit = $_POST["idcardedit"];
// $idcardtc = $idcardedit;

// if($passwd !=''){
//     $pass = md5($passwd);
// }else{
//     $pass = $_POST["passedit"];

// }

// $ext = pathinfo(basename($_FILES['photo']['name']), PATHINFO_EXTENSION);
// if($ext !=''){
// $new_img_name = 'img_'.uniqid().".".$ext;
// $image_path = "../all_img/users_img/";
// $upload_path = $image_path.$new_img_name;
// move_uploaded_file($_FILES['photo']['tmp_name'], $upload_path);
// $photo = $new_img_name;
// }else{
//     $new_img_name=$photo;
// }






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



    $sql = "UPDATE ip SET
    ipaddress = '$ipaddress'
    WHERE id = '$idcardedit' ";
    $query = mysqli_query($conn, $sql);


    // $sql2 = "UPDATE user_login SET
    // idcard = '$idcard',
    // passwd = '$pass',
    // name = '$uname',
    // lastname = '$lname',
    // photo = '$photo'
    // WHERE idcard = $idcardedit 
    // ";
    // $query  = mysqli_query($conn, $sql2);

    // echo '<pre>';
    // print_r($sql);
    // echo'</pre>';
    // // exit();
    // echo '<pre>';
    // print_r($sql2);
    // echo'</pre>';
    // exit();

    if($query){
        echo "
        <script>
            alert('แก้ไขข้อมูลเรียบร้อย !!');
            window.location = 'list_researcher.php';
        </script>";   
    }else{
        echo "
        <script>
            alert('แก้ไขไม่สำเร็จ');
            window.location = 'list_researcher.php';
        </script>";   
    }

?>