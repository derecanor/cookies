<?php
/**
 * Created by PhpStorm.
 * User: 1809441
 * Date: 11/03/2019
 * Time: 19:20
 */

//adding session//
$_SESSION['var'] = $val;
$_SESSION['Firstname'] = "Jim";
?>

<?php
//reading session//
$_SESSION['foo'] = 'bar';
print $_SESSION['foo'];
?>

<?php
//removing session data//
$_SESSION['foo'] = 'bar';
print $_SESSION['foo'];
unset($_SESSION['foo']);
?>

<?php
//ending session//
session_start();
$_SESSION = array();
session_destroy();
?>

<?php
//checking session data//
    session_start();
    if (isset($_SESSION['Firstname'])) {
        ///your code here
    }
?>
