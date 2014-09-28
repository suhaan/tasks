<?php

include_once("../tasks/dbconnect.php");
echo "<h3>Tasks List</h3>";

echo "<div align='right'>";
echo "<a href='../tasks/addtask.php'>Add Task</a>";
echo "</div>";
$tasks = $mysqli->query("SELECT id,name,status FROM user_tasks WHERE users_id='$userid' and status <> '13'");
//echo "SELECT id,name,status FROM user_tasks WHERE users_id='$userid' and status <> '13'<br/>";
echo "<table cellpadding='5px' cellspacing='5px'>";
while($row = $tasks->fetch_object()){
 $taskid= $row->id;
 echo "<tr><td>".$row->name."</td><td><a href='../tasks/processtask.php?taskid=$taskid&action=del'>Delete</a></td>";
 if($row->status == 10){
    echo "<td>Completed</td>";
}
 else{
    echo "<td><a href='../tasks/processtask.php?taskid=$taskid&action=comp'>Mark as Completed</a></td>";
}
 echo "</tr>";
    
}
echo "</table>";