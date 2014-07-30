<?php
/*  This php file is called from branchdest.php, this will print out
the different branches and destination once a data is clicked from
the drop down list box.

Developer: Ian Mars Acut
*/

//Connect
$con= mysql_connect($server="137.158.107.215", $username="G07SA", $password="Group07.") or die('cannot access the requested server'. mssql_get_last_message());
//$con = mssql_connect(“137.158.107.215″, “rates”,”rates”) or die(‘Cannot connect to server’.mssql_get_last_message());

//Choose database
  $db = mysql_select_db($database_name="FlexiCadastre",$con);
  
  echo "connected";
//$db = mssql_select_db(“iefastrak”,$con);

//Test different branches and its corresponding destination
//$branch = $_POST['branches'];
//$destination = $_POST['destination'];

//$details = “SELECT * FROM custlclratemst WHERE brancode= ‘”.$branch.”‘ AND fwdgdest= ‘”.$destination.”‘”;
//$query = mssql_query($details);

