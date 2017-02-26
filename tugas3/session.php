<?php 
session_start();
if(isset($_POST['login'])){
include "connect.php";
$query=mysql_query("SELECT * FROM user WHERE user='$_POST[username]' and password='$_POST[password]'");
$row=mysql_num_rows($query);
if($row==0){
$_SESSION['username']=$_POST['username'];
$_SESSION['password']=($_POST['password']);
?>
<script language="javascript">alert('Anda Berhasil Login');document.location="index.php"</script>
<?php
}else{
?>
<script language="javascript">alert('Anda Gagal Login, Silakan Cek User/Password Anda atau Silakan Daftar Terlebih Dahulu');document.location="login.php"</script>
<?php
}
}
?>