<!DOCTYPE html>
<html lang="en">
<?php include("./conponents/head.php");
include("./functions/db/database.php");
include("./functions/check/login-check.php");?>
<body>
    <?php if(isset($_GET["error"])){
        echo "".$_GET["error"]."";
    }else if(isset($_GET["success"])){

        echo "".$_GET["success"]."";
    }else if(isset($_GET["message"])){

        echo "".$_GET["message"]."";
    }


    echo $username;
    echo $email;
    ?>
<button onclick="window.location.href='./functions/handlers/logout.php'">Logout</button>
</body>
</html>