//create homepage.php//
<?php
function displayAccessLevelInformation($accessLevel) {
        if($access_level =="standard user") {
        echo "<p>You are currently logged in as a standard user</p>";
 }
 else if ($access_level=="root"){
        echo"<p>You are currently logged in as a root user</p>;
        echo"<p>You now have access to additional administrative features </p>";
    }
 }
?>