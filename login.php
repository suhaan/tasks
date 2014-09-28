<?php
echo "<div style='padding:100px;align:center;border:1 px solid #CCCCCC;'>";

?>
<h2>Sign Into Your Account</h2>
<?php
echo "<form name='login' method='POST' action='../tasks/prologin.php'>";
echo "<label for='uname'>User Name</label><input type='text' value='' name='uname' id='uname'/><br/>";
echo "<label for='password'>Password</label><input type='password' value='' name='password' id='password'><br/>";
echo "<input type='submit' value='Save' />";
echo "</form>";