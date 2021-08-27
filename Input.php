<html>

	<head>
			<title>Input</title>
			<link type= "text/css" href="StyleSheet.css" rel="StyleSheet">
	</head>
	
	<body>


		    <?php
                    include_once "Header.php";
                    include_once "Footer.php";
                    include_once "Menu.php";
                    

                   
                    
            ?>
            
			<div id="content">
			
				<div class="row">
  				<div class="column">
						
				<form action ="Input.php" method ="get">
				
				
					<label for ="fname">First Name </label>
					<input type ="text" id="fname" name="fname"  value="<?php if(isset($_GET['fname'])){echo $_GET['fname'];}?>" />
					<br>
					<label for ="lname">Last Name </label>
					<input type ="text" id="lname" name="lname"  value="<?php if(isset($_GET['lname'])){echo $_GET['lname'];}?>" />
					<br>
					<label for ="tel">Telepnone Number</label>
					<input type ="text" id="tel" name="tel"  value="<?php if(isset($_GET['tel'])){echo $_GET['tel'];}?>" />
					<br>
					<label for ="email">Email</label>
					<input type ="text" id="email" name="email"  value="<?php if(isset($_GET['email'])){echo $_GET['email'];}?>" />
					<br>
					<label for ="dob">Birth Day</label>
					<input type ="text" id="dob" name="dob"  value="<?php if(isset($_GET['dob'])){ echo $_GET['dob'];}?>" />
					<br>
					
					
					<label>Select your profession:</label>
					<br>
					<label for="student">Student</label>
					<input class="radio" type="radio" id="student" name="profession" value="Student"  <?php if(isset($_GET['profession']) && $_GET['profession'] =='Student' ){echo "checked";}?>>
					<label for="doctor">Doctor</label>
					<input class="radio" type="radio" id="doctor" name="profession" value="Doctor" <?php if(isset($_GET['profession']) && $_GET['profession'] =='Doctor' ){echo "checked";}?>>
					<label for="engineer">Engineer</label>
					<input class="radio" type="radio" id="engineer" name="profession" value="Engineer" <?php if(isset($_GET['profession']) && $_GET['profession'] =='Engineer' ){echo "checked";}?>>
					<label for="farmer">Farmer</label>
					<input class="radio" type="radio" id="farmer" name="profession" value="Farmer" <?php if(isset($_GET['profession']) && $_GET['profession'] =='Farmer' ){echo "checked";}?>>
					<br>
					
					<label for ="sport">Choose your favourite sport </label>
					<select name="sport" id="sport">
                        <option value="Hockey" <?php if(isset($_GET['sport']) && ($_GET["sport"] =="Hockey")) {echo "selected";}?>>Hockey</option>
                        <option value="Football" <?php if(isset($_GET['sport']) && ($_GET["sport"] == "Football")) {echo "selected";}?>>Football</option>
                        <option value="Carling" <?php if(isset($_GET['sport']) && ($_GET["sport"] =="Carling")) {echo "selected";}?>>Carling</option>
                        <option value="Tennis" <?php if(isset($_GET['sport']) && ($_GET["sport"] =="Tennis")) {echo "selected";}?>>Tennis</option>
                    </select>
                    <br>
					
             		
					<input type="submit" value="Submit information">
					
				</form>
				
				</div>
				
				<div class="column">
				
				
				<?php 
				
				if(isset($_GET['fname'])){
				    
				    printf("First Name: %s",$_GET['fname']);
				}
				
				if(isset($_GET['lname'])){
				    echo "<br>";
				    printf("Last Name: %s",$_GET['lname']);
				}
				
				if(isset($_GET['tel'])){
				    echo "<br>";
				    printf("Telephone Number: %s",$_GET['tel']);
				}
				
				if(isset($_GET['email'])){
				    echo "<br>";
				    printf("Email: %s",$_GET['email']);
				}
				
				if(isset($_GET['dob'])){
				    echo "<br>";
				    printf("Birth Day: %s",$_GET['dob']);
				}
				
				if(isset($_GET['profession'])){
				    echo "<br>";
				    printf("Profession: %s",$_GET['profession']);
				}
				
				if(isset($_GET['sport'])){
				    echo "<br>";
				    printf("Favourite sport: %s",$_GET['sport']);
				}
				
				
				?>
				
				</div>
				
				
			</div>
			
			</div>
			
			
	</body>
	
</html>
