<?php
session_start();

if ( isset( $_SESSION['user_id'] ) ) {
} else {
    header("Location: index.html");
}
?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<style>
	
	.tabs-vertical .tabs {
  height: auto;
  -ms-flex-direction: column;
  -webkit-flex-direction: column;
  flex-direction: column;
  display: -webkit-flex;
  display: flex;
}
.tabs-vertical .tab {
  width: 100%;
}
.tabs-vertical .tab .active {
  -moz-transition: border-color 0.5s ease;
  -o-transition: border-color 0.5s ease;
  -webkit-transition: border-color 0.5s ease;
  transition: border-color 0.5s ease;
  border-right: 3px solid #424242;
}
.tabs-vertical .tab :hover {
  border-right: 3px solid #eee;
}
.tabs-vertical .indicator {
  display: none;
}

	</style>
</head>
<body>
	<ul id="dropdown1" class="dropdown-content" style="min-width:140px;">
		<?php
			if($_SESSION['gender'] == 0){
				?>
					<li><img style="border-radius: 50%; width:100px;margin-left:5px; margin-right:5px;" src="image/profile_img/default1.png"></li>
				<?php
			}
			else{
				?>
					<li><img style="border-radius: 50%; width:100px;margin-left:5px; margin-right:5px;" src="image/profile_img/default2.png"></li>
				<?php
			}
		
		?>
		
		<li><a href="" style="pointer-events: none; cursor: default;"><?php echo $_SESSION['name'];?></a></li>
		<li><a href="staff_index.php">Home</a></li>
		<li class="divider"></li>
		<li><a href="staff_profile.php">Profile</a></li>
		<li class="divider"></li>
		<li><a href="health_tips.php">Health Tips</a></li>
		<li class="divider"></li>
		<li><a href="logout.php">Log out</a></li>
	</ul>

	<nav class="blue-grey darken-4">
    <div class="nav-wrapper">
		<a href="staff_index.php" class="brand-logo" style="margin-left:30px;">Google Fit</a>
		<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		<ul class="right hide-on-med-and-down" style="margin-right:30px;">
			<li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Menu<i class="material-icons right">arrow_drop_down</i></a></li>
		</ul>
    </div>
	</nav>

	<ul class="sidenav" id="mobile-demo" style="margin-top:20px;">
		<?php
			if($_SESSION['gender'] == 0){
				?>
					<li><img style="border-radius: 50%; width:100px;margin-left:80px; margin-right:5px; margin-top:50px;" src="image/profile_img/default1.png"></li>
				<?php
			}
			else{
				?>
					<li><img style="border-radius: 50%; width:100px;margin-left:80px; margin-right:5px; margin-top:50px;" src="image/profile_img/default2.png"></li>
				<?php
			}
		
		?>
		<li><a href="" style="pointer-events: none; cursor: default;"><?php echo $_SESSION['name'];?></a></li>
		<li><a href="staff_index.php">Home</a></li>
		<li class="divider"></li>
		<li><a href="staff_profile.php">Profile</a></li>
		<li class="divider"></li>
		<li><a href="health_tips.php">Health Tips</a></li>
		<li class="divider"></li>
		<li><a href="logout.php">Log out</a></li>
		<li class="divider"></li>
	</ul>

<div class="container" style="margin-top:50px;">
<div class="card-panel grey lighten-2 z-depth-5">
	<div class="row">
        <div class="input-field col s12">
			
		<div class="row">
			<div class="col s12">
			  <div class="card">
				<div class="card-image">
				<div style="height:300px; overflow:hidden;">
				  <a href=""><img src="image/bg/bg.jpg" style="max-width:100%; height: auto;"></a>
				</div>
				  <span class="card-title"><?php echo $_SESSION['name']; echo " "; echo $_SESSION['lastname']; ?></span>
					<?php
						if($_SESSION['gender'] == 0){
							?>
								<a class="btn-floating halfway-fab waves-effect waves-light red" href="" style="width:150px; height:150px;"><img src="image/profile_img/default1.png"></a>
							<?php
						}
						else{
							?>
								<a class="btn-floating halfway-fab waves-effect waves-light red" href="" style="width:150px; height:150px;"><img src="image/profile_img/default2.png"></a>
							<?php
						}
					
					?>
				</div>
				<div class="card-content">
				  
				  <div class="row" style="margin-top:40px;">
						<div class="tabs-vertical">
							<div class="col s4 m3">
								<ul class="tabs">
									<li class="tab">
										<a class="active" href="#tab1">Overview</a>
									</li>
									<li class="tab">
										<a href="#tab2">Health Info</a>
									</li>
									
									
									
								</ul>
							</div>
							<div class="col s8 m6">
								<div id="tab1" class="tab-content">
									<h4>Overview</h4></br>
									Name : <?php echo $_SESSION['name']; echo " "; echo $_SESSION['lastname']; ?></br>
									Gender : <?php 
													if($_SESSION['gender'] == 0){
														echo "Male";
													}
													
													else{
														echo "Female";
													}?> </br>
									
									birth date: </br>
									<h4>Contact Info</h4></br>
									phone number: <?php echo $_SESSION['phone']; ?></br>
									Email: <?php echo $_SESSION['email']; ?></br>
									
								</div>
								<div id="tab2" class="tab-content">
									<h4>Health Info</h4></br>
									
									<div class="row">
										<div class="col s12 ">
										  <div class="card">
											<div class="card-content grey lighten-2 z-depth-5">
											  <iframe name="frame" style="display:none;"></iframe>
											  <form action="session.php" method="post" target="frame">
											  Age: <input id="age" name="age" type="text" value="<?php echo $_SESSION['age']; ?>"/></br>
											  Weight (KG only!): <input id="weight" name="weight" type="text" value="<?php echo $_SESSION['weight']; ?>"/></br>
											  Height (CM only!): <input id="height" name="height" type="text" value="<?php echo $_SESSION['height']; ?>"/></br>
											  BMI: <input id="bmi" name="bmi" type="text" value="<?php echo $_SESSION['bmi']; ?>" readonly /></br>
											  Your BMI is <input id="bmitext" name="bmitext" type="text" value="<?php echo $_SESSION['bmitext']; ?>" readonly /></br>
											  
											  <button type="submit" class="waves-effect waves-light btn" onclick="calculate_bmi()" style="min-width: 150px;">Update BMI</button></br></br>
											  </form>
											</div>
											<div class="card-action grey lighten-2 z-depth-5">
											  <button type="button" class="waves-effect waves-light btn" onclick="heart_point()" style="min-width: 150px;">Jogging</button></br></br>
											  <button type="button" class="waves-effect waves-light btn" onclick="heart_point()" style="min-width: 150px;">Skipping</button></br></br>
											  <button type="button" class="waves-effect waves-light btn" onclick="heart_point()" style="min-width: 150px;">Running</button></br></br>
											  <button type="button" class="waves-effect waves-light btn" onclick="heart_point()" style="min-width: 150px;">Heavy Workout</button></br></br>
											  <button type="button" class="waves-effect waves-light btn" onclick="" style="min-width: 150px;">Add New</button></br></br>
											</div>
										  </div>
										</div>
									</div>
									
									<div class="row">
										<div class="col s12">
										  <div class="card">
											<div class="card-content grey lighten-2 z-depth-5">
											  Heart Point: <input id="hp" name="hp" type="text" value="" readonly /></br></br>
											  Move Per Minute: <input id="bmitext" name="bmitext" type="text" value="<?php echo $_SESSION['moves_per_minutes']; ?>/100" readonly /></br></br>
											  Step: <input id="bmitext" name="bmitext" type="text" value="<?php echo $_SESSION['steps']; ?>" readonly /></br></br>
											  Cals Burnt (KJ): <input id="bmitext" name="bmitext" type="text" value="<?php echo $_SESSION['cals_burnt']; ?>" readonly /></br></br>
											</div>
										  </div>
										</div>
									</div>
								
								</div>
								
								
				
							</div>
							[<a href="update_info.php">Update Information</a>]
							
							
						</div>
					</div>


				</div>
			  </div>
			</div>
		  </div>
  
  
			
			
			 
  
  
        </div>
     </div>
</div>
</div>





<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
	
	
	document.addEventListener('DOMContentLoaded', function() {
		var elems = document.querySelectorAll('.sidenav');
		var instances = M.Sidenav.init(elems, options);
	});


	$(document).ready(function(){
		$('.sidenav').sidenav();
	});
	
	$(".dropdown-trigger").dropdown({
	   coverTrigger: false
	});
	

	$(document).ready(function(){
		$('.tabs').tabs();
	});
	
	function calculate_bmi() {
		var weight = document.getElementById("weight").value;
		var height = document.getElementById("height").value;
		var new_height = height/100
		var BMI = weight / Math.pow(new_height, 2);
		
		document.getElementById("bmi").value = BMI;
        if (BMI < 18.5) document.getElementById("bmitext").value = "Under Weight";
        if (BMI >= 18.5 && BMI <= 25) document.getElementById("bmitext").value = "Normal Weight";
		if (BMI >= 25 && BMI <= 30) document.getElementById("bmitext").value = "Over Weight";
        if (BMI >= 30 && BMI <= 35) document.getElementById("bmitext").value = "Obesity";   
		if (BMI > 35) document.getElementById("bmitext").value = "Severe Obesity";   
	}
	
	function heart_point(){
		
		document.getElementById("hp").value = Math.floor((Math.random() * 40) + 40);
	}

       
</script>
</body>
</html>