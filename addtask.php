<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include_once("../tasks/dbconnect.php");
if(!empty($taskid)){
    if($result = $mysqli->query("SELECT name,descr FROM user_tasks WHERE id='$taskid' AND users_id='$userid'")){
         while ($row = $result->fetch_assoc()) {
          $name = $row['name'];
          $descr = $row['descr'];
    }
    }
    
}
echo "<form name='addtask' method='POST' action='proaddtask.php'>
<input type='hidden' name='taskid' value='$taskid'>
<div class='text'>
    <label for='name'>Name</label>
    <input type='text' size='30' name='name' id='name' value='$name'/>
</div>



<div class='text'>
    <label for='descr'>Description</label>
    <textarea rows='5' cols='50' name='descr' id='descr'>$descr</textarea>
</div> ";
echo "<input type='submit' value='save'></form>";
?>
<style type="text/css">

div.text {
  margin: 0;
  padding: 0;
  padding-bottom: 1.25em;
}

div.text label {
  margin: 0;
  padding: 0;
  display: block;
  font-size: 100%;
  padding-top: .1em;
  padding-right: .25em;
  width: 6em;
  text-align: right;
  float: left;
}

div.text input,
div.text textarea {
  margin: 0;
  padding: 0;
  display: block;
  font-size: 100%;
}

input:active,
input:focus,
input:hover,
textarea:active,
textarea:focus,
textarea:hover {
  background-color: lightyellow;
  border-color: yellow;
}

  </style>