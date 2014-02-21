<?php 
//making connection to database and table selection
require_once("../include/connect.php");
$title="Login";
//include the header
require("../include/header.php");
?>
<!--                    Page content Start here        -->

<form class="email" name="login" method="post" action="login.php">
            <p align="center"><font color="white"><span style="font-size:12pt;"><b>Login</b></span></font></p>
 <span style="font-size:10pt;">username</span>
<input type="text" name="username"><br/>
<span style="font-size:10pt;">Password:</span>
<input type="password" name="password"><br/>
<input class="send" type="submit" name="login" value="Submit">
</form>
<!--                    Page content ends here         -->
<?php
//including footer
require("../include/footer.php");
?>