<?php
session_start();
include 'connect.php';
  if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = sha1($_POST['password']);

    $sql_query = "select * form user where username='$username' and password='$password'";

    if (mysql_query($sql_query)) {
      $num_rows = mysql_num_rows(mysql_query($sql_query));
      if ($num_rows == 1) {
        $_SESSION['username'] = $username;
        ?>
        <script type="text/javascript">
        alert('anda berhasil login');
        window.location.href="index.php";
        </script>
        <?php else {
          ?> 
          <script type="text/javascript">
        alert('username dan password tidak cocok');
        window.location.href="login.php";
        </script>
       <?php
        }
      }
    }
  }

?>


<form method="post">
<table width="60%" align="center">
	<tr>
	<th align="center" colspan="2"> login <a href="daftar.php">-daftar</a></th>
	</tr>
	<tr>
	<td> username </td>
	<td> <input type="text" name="username" size="80"></td>
	</tr>
	<tr>
	<td> Password </td>
	<td><input type="password" name="password" size="80"></td>
	</tr>
	<tr>
	<td colspan="2" align="right">
	<input type="submit" value="login" name="login"> 
	<input type="submit" value="batal" name="batal">	</td>
	</tr>

</table>