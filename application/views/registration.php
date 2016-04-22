<?php
/*
 * This is the resiation page
 */
?>
<form name="register" method="post" action="/authorization/registerToDatabase">
  Username: <input type="text" name="userid"></input><br/>
  Password: <input type="password" name="password"></input><br/>
  Password Confrimation: <input type="password" name="passwordconfirmation"></input><br/>
  <input type="submit"></input>
</form>