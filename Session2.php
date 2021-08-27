<?php

session_start();

echo "<div id=\"content\">";
if(isset($_SESSION['fname'])){
    
    printf("First Name: %s",$_SESSION['fname']);
}

if(isset($_SESSION['lname'])){
    echo "<br>";
    printf("Last Name: %s",$_SESSION['lname']);
}

if(isset($_SESSION['tel'])){
    echo "<br>";
    printf("Telephone Number: %s",$_SESSION['tel']);
}

if(isset($_SESSION['email'])){
    echo "<br>";
    printf("Email: %s",$_SESSION['email']);
}

if(isset($_SESSION['dob'])){
    echo "<br>";
    printf("Birth Day: %s",$_SESSION['dob']);
}

if(isset($_SESSION['profession'])){
    echo "<br>";
    printf("Profession: %s",$_SESSION['profession']);
}

if(isset($_SESSION['sport'])){
    echo "<br>";
    printf("Favourite sport: %s",$_SESSION['sport']);
}

echo "</div>";

?>

<html>

	<head>
			<title>Session2</title>
			<link type= "text/css" href="StyleSheet.css" rel="StyleSheet">
	</head>
	
	<body>


		    <?php
                    include_once "Header.php";
                    include_once "Footer.php";
                    include_once "Menu.php";
                    

                   
                    
            ?>
            
	</body>
	
</html>