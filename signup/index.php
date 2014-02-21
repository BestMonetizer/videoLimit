<?php 
//making connection to database and table selection
require_once('../include/connect.php');
$title="Sign Up";
//include the header
require('../include/header.php');
?>
<form action="signup.php" method="post" name="signup">
<table align="center">

<tr><td>Username</td>

<td><input type="text" name="username"></td></tr>

<tr><td>Password</td>

<td><input type="password" name="password"></td></tr>

<tr><td colspan="2"><input type="submit" name="signup"></td></tr>
</table>

</form>
<?php
//including footer
require('../include/footer.php');
?>