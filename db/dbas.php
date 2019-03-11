/**
 * Created by PhpStorm.
 * User: 1809441
 * Date: 11/03/2019
 * Time: 20:13
/*connection*/
<?php
define('DB_SERVER','your-server');
define('DB_USERNAME','your-username');
define('DB_PASSWORD','your-password');
define('DB_DATABASE','your-database');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
