@extends ('templates.index')
@section ('content')
<article>
<tr>
</tr>
<tr>
  
  <form method ="post" action="session.php">
  <table width="60&"
  align="center">
  
  <tr valign="top">
    <td>Username</td>
    <td>:</td>
    <td><input type="text" name="username" /></td>
  </tr>
  <tr valign="top">
    <td>Password</td>
    <td>:</td>
    <td><input type="password" name="password" /></td>
    <tr valign="top">
    <td><input type="checkbox" name="remember" />ingat</td>>
  </tr>
  <tr valign="top">
    <td></td>
    <td></td>
    <td align="right"><input type="submit" name="login" value="LOGIN" /></td>
  </tr>
</table>
</form>
</article>
@stop