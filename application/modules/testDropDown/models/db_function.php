<?php

include_once'db_connect.php';

function connect(){
    mysql_connect(DB_HOST,DB_USER,DB_PASS) or die('could not connect to the server'.  mysql_error());
    mysql_select_db(DB_NAME);
    
}

function close(){
    mysql_close();
}

function query(){
    $myData = mysql_query("SELECT * FROM Licences");
    while($record = mysql_fetch_array($myData)){
        echo '<option value="' .$record('region').'">' .$record('region') . '</option';
        
    }
    
}