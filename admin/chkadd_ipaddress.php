<?php
include '../connect.php';

// echo '<pre>';
// print_r($_POST);
// echo'</pre>';
// exit();
$ipaddress = $_POST["ipaddress"];
$ip_name = $_POST["ip_name"];
$ip_os = $_POST["ip_os"];

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

    
    $sql1 = "INSERT INTO ip (id, ipaddress ,ip_name ,ip_os) 
    VALUES ('$id', '$ipaddress','$ip_name','$ip_os')";
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