<?php
include 'profile.php';
protect_page();

function protect_page(){
   if  ( $_SESSION['logged_in'] = false){;

        header("location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
</head>
<body>

</body>
</html>