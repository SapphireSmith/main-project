<?php
include 'dbConnection.php';
$e = $_POST['email'];
$p = $_POST['password'];
$s = mysqli_query($connection,"select * from login where uname = '$e' and upass = '$p' ");

$r = mysqli_fetch_array($s);
session_start();

if($r['utype'] === 'User')
{
    $_SESSION['uid'] = $r['uid'];
    echo "<script> window.location='userPage.html'</script> ";
}
else if($r['utype'] === 'mechanic')
{
    $_SESSION['uid'] = $r['uid'];
    echo "<script> window.location='mechanicPage.html'</script> ";
}
else if($r['utype'] === 'shop')
{
    $_SESSION['uid'] = $r['uid'];
    echo "<script> window.location='shopPage.html'</script> ";
}
else
{
    echo "<script>alert('Email id or password does not match');window.location='form1-login.html';</script>";
   
}
?>