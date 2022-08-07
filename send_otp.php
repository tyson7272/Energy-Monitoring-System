<?php 
include 'config.php';
$email=$_POST['email'];
$res = mysqli_query($conn,"select * from users where email='$email'");
$count=mysqli_num_rows($res);
if($count>0){
    $otp=rand(11111,99999);
    mysqli_query($conn,"update users set otp='$otp' where email='$email'");
    echo "yes";
}else{
    echo "not_exist";
}
?>
