
<?php
include 'dbConnection.php';
$n=$_POST['name'];
$c=$_POST['contact'];
$e=$_POST['email'];
$p=$_POST['pass'];
$s=mysqli_query($connection,"insert into customer(name,email,cno)values('$n','$e','$c')");
$q=mysqli_query($connection,"select max(rid) as uid from customer");
$rw=mysqli_fetch_array($q);
$uid=$rw['uid'];
$st=mysqli_query($connection,"insert into login(uid,uname,upass,utype)values($uid,'$e','$p','User')");
echo "<script>alert('Registered');window.location='form1-login.html';</script>";
?>