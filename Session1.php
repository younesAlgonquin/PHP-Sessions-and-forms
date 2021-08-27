<?php

session_start();

if(isset($_POST["fname"]))
{
    $_SESSION["fname"] = $_POST["fname"];
    header("Location: Session2.php");

}

if(isset($_POST["lname"]))
{
    $_SESSION["lname"] = $_POST["lname"];
    header("Location: Session2.php");

}

if(isset($_POST["tel"]))
{
    $_SESSION["tel"] = $_POST["tel"];
    header("Location: Session2.php");

}

if(isset($_POST["email"]))
{
    $_SESSION["email"] = $_POST["email"];
    header("Location: Session2.php");

}

if(isset($_POST["dob"]))
{
    $_SESSION["dob"] = $_POST["dob"];
    header("Location: Session2s.php");

}


if(isset($_POST["profession"]))
{
    $_SESSION["profession"] = $_POST["profession"];
    header("Location: Session2.php");

}

if(isset($_POST["sport"]))
{
    $_SESSION["sport"] = $_POST["sport"];
    header("Location: Session2.php");
    exit;
}



?>



<html>

	<head>
			<title>Session1</title>
			<link type= "text/css" href="StyleSheet.css" rel="StyleSheet">
	</head>
	
	<body>


		    <?php
                    include_once "Header.php";
                    include_once "Footer.php";
                    include_once "Menu.php";
                    

                   
                    
            ?>
            
			<div id="content">
						
				<form action ="Session1.php" method ="post">
				
				
					<label for ="fname">First Name </label>
					<input type ="text" id="fname" name="fname"  value="<?php if(isset($_POST['fname'])){echo $_POST['fname'];}?>" />
					<br>
					<label for ="lname">Last Name </label>
					<input type ="text" id="lname" name="lname"  value="<?php if(isset($_POST['lname'])){echo $_POST['lname'];}?>" />
					<br>
					<label for ="tel">Telepnone Number</label>
					<input type ="text" id="tel" name="tel"  value="<?php if(isset($_POST['tel'])){echo $_POST['tel'];}?>" />
					<br>
					<label for ="email">Email</label>
					<input type ="text" id="email" name="email"  value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>" />
					<br>
					<label for ="dob">Birth Day</label>
					<input type ="text" id="dob" name="dob"  value="<?php if(isset($_POST['dob'])){ echo $_POST['dob'];}?>" />
					<br>
					
					
					<label>Select your profession:</label>
					<br>
					<label for="student">Student</label>
					<input class="radio" type="radio" id="student" name="profession" value="Student"  <?php if(isset($_POST['profession']) && $_POST['profession'] =='Student' ){echo "checked";}?>>
					<label for="doctor">Doctor</label>
					<input class="radio" type="radio" id="doctor" name="profession" value="Doctor" <?php if(isset($_POST['profession']) && $_POST['profession'] =='Doctor' ){echo "checked";}?>>
					<label for="engineer">Engineer</label>
					<input class="radio" type="radio" id="engineer" name="profession" value="Engineer" <?php if(isset($_POST['profession']) && $_POST['profession'] =='Engineer' ){echo "checked";}?>>
					<label for="farmer">Farmer</label>
					<input class="radio" type="radio" id="farmer" name="profession" value="Farmer" <?php if(isset($_POST['profession']) && $_POST['profession'] =='Farmer' ){echo "checked";}?>>
					<br>
					
					<label for ="sport">Choose your favourite sport </label>
					<select name="sport" id="sport">
                        <option value="Hockey" <?php if(isset($_POST['sport']) && ($_POST["sport"] =="Hockey")) {echo "selected";}?>>Hockey</option>
                        <option value="Football" <?php if(isset($_POST['sport']) && ($_POST["sport"] == "Football")) {echo "selected";}?>>Football</option>
                        <option value="Carling" <?php if(isset($_POST['sport']) && ($_POST["sport"] =="Carling")) {echo "selected";}?>>Carling</option>
                        <option value=Tennis" <?php if(isset($_POST['sport']) && ($_POST["sport"] =="Tennis")) {echo "selected";}?>>Tennis</option>
                    </select>
                    <br>
					
             		
					<input type="submit" value="Submit information">
					
				</form>				
				
			</div>
			
			
	</body>
	
</html>
				