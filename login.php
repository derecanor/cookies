//Establishing connection with database//
<?php
/**
 * Created by PhpStorm.
 * User: 1809441
 * Date: 11/03/2019
 * Time: 20:23
 */
include ("connection.php");
if(empty($_POST["username"]) || empty($_POST["password"]))
{
        echo "Both fields are required";
}else
{
 $username=$_POST['username'];
 $password=$_POST['password'];
}
    $sql="SELECT uid FROM users WHERE username= '$username' and password='$password'";

//hold result of query//
$result=mysqli_query($db,$sql);

//setting error message to sensible message//
if(mysqli_num_rows($result)==1)
{
    header("location:home.php");// Redirecting To another Page
}else
    {
        echo "Incorrect username or password.";
        }
        ?>
