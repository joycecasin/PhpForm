<?php
// Connect with mysql
require_once ('includes/config.php');

/*//Select Database
mysqli_select_db($dbc,'dbphptabel');*/

//Select Query
$del = "DELETE FROM student WHERE student_id='$_GET[id]'";

//Execute the query
if (mysqli_query($dbc,$del)){
    header("refresh:0.1; url=getstudentinfo.php");
    }else{
    echo "Not Deleted";
}



?>
