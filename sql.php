//executing sql query//
<?php
/**
 * Created by PhpStorm.
 * User: 1809441
 * Date: 11/03/2019
 * Time: 19:48
 */

//create sql query as a string//
$sql_query = "SELECT * FROM superheros WHERE superpower LIKE '%lasers%'";
//execute the SQL query
$result=$db->query($sql_query);
//iterate over $result object one $row at a time
//use fetch_array () to return an associative array
while($row=$result->fetch_array()){
    //process the $row
}

//process each row individually//
while($row=$result->fetch_array()){
    //print out fields from row of data
    echo "<p>"  . $row['superheroName'] ."</p>";
}

$result->close();
//close connection to database
$db->close();

?>
