<!DOCTYPE html>
<html>
<head>
	<title>Modular Kitchen Business</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<script src="js/jquery.min.js"></script>
  	<script src="js/popper.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
	<style>
	body{
	background-color:#000040;
	}
	</style>
</head>
<body>
<div>
		<img src="images/r2.jpg" class="container-fluid" id="f1">
		<div class="p-3">
		<h1 class="text-center font-weight-bolder p-2 mx-5 bg-secondary text-white"id="f2">Modular Kitchen </h1>
</div>
<div class="flex-row d-flex mx-auto row container mb-3" id="first1">

	<div class="col-4" id="first2">
			<div class="p-3">
				<ul class="nav flex-column p-2">
					<li class="nav-item rounded p-2 m-2" id="f3">
						Just put your below crecidentials and we will respond you.
					</li>
				</ul>
			</div>

			<div class="card ml-1 mt-2" id="f4">
				<div class="card-header">
					<h5>For Enquiry</h5>
				</div>
				<div class="card-body">
					<form method="post" action="index.php">
						<h6>Enter name</h6>
						<input type="text" name="name" placeholder="your name" class="px-2 py-1 form-control" required>
						<h6>*Enter Mobile no</h6>
						<input type="text" name="mob" placeholder="your phone number" class="px-2 py-1 form-control" required>
						<h6>Enter  Email</h6>
						<input type="email" name="email" placeholder="your email address" class="px-2 py-1 form-control">
				</div>
				<div class="card-footer">
					<input type="submit" value="CLICK Me!!!" name="submit" class="form-control btn text-white" id="btn1">	
				</div>
					</form>
			</div>
			<div class="pl-1 pt-2">
				<div class="p-2" id="f4">
					<h4 class="text-uppercase"><u>contact us</u></h4>
						<p class="fas fa-envelope"></p><h6 class="d-inline">Mail: asdskkds fsjkn kajdfk kfjsklf</h6><br>
						<p class="fas fa-phone"></p><h6 class="d-inline">Phone: asdskkds fsjkn kajdfk kfjsklf</h6><br>
						<p class="fas fa-home"></p><h6 class="d-inline mx-auto">Address: asdskkds fsjkn kajdfk kfjsklf asdskkds fsjkn kajdfk kfjsklf</h6>
				</div>
				<a href="admin/adminlogin.php"><button class="mt-3 btn btn-block mx-auto">Admin login</button></a>
			</div>
	</div>




	<div class="col-8" id="first3">
			<div class="flex-row d-flex text-white" id="cent3">
				<div class="d-inline flex-column py-2 text-center" id="f5"><a href="index.php" class="text-white active">Home</a></div>
				<div class="d-inline flex-column py-2 text-center" id="f5"><a href="aboutus.php" class="text-white">About us</a></div>
				<div class="d-inline flex-column py-2 text-center" id="f5"><a href="designs.php" class="text-white">Designs</a></div>
				<div class="d-inline flex-column py-2 text-center" id="f5"><a href="appliances.php" class="text-white">Appliances</a></div>
			</div>
				<div class="row text-white mx-1 mt-4">
					<div class="col-5">
						<img src="images/k2.jpg" height="140px" width="170px">
					</div>
					<div class="col-7">
						<p class="font-weight-bolder text-justify px-2">jaksndm ajfksdn,m f jwbfkjsb dnjwhl djfbkjfs,md jbjsdmfbsmndf dkndjfdmbfbsnmfd fnsdbfjkf,mmnfmdfn,d knsdm bjn mw kebjb ssnbcjscs csdksb nskjsd</p>
					</div>	
				</div>
				<div class="row text-white mx-1 mt-4">
					<hr>
					<div class="col-5">
						<img src="images/k1.jpg" height="140px" width="170px">
					</div>
					<div class="col-7">
						<p class="font-weight-bolder text-justify px-2">jaksndm ajfksdn,m f jwbfkjsb dnjwhl djfbkjfs,md jbjsdmfbsmndf dkndjfdmbfbsnmfd fnsdbfjkf,mmnfmdfn,d knsdm bjn mw kebjb ssnbcjscs csdksb nskjsd</p>
					</div>
				</div>
				<br>
				<div class="row px-3 pt-4">
					<div class="col-6">
						<p>hdfakl kldfkln sdkfjkdnf dklfsakdlnfm kfnaskdnf,msk ndsdklfnms  flkdsfklsdnf</p>
						<ul>
							<li>asfhk</li>
							<li>skjdfk</li>
							<li>sdfhkl</li>
						</ul>
					</div>
					<div class="col-6">
						<p>hdfakl kldfkln sdkfjkdnf dklfsakdlnfm kfnaskdnf,msk ndsdklfnms  flkdsfklsdnf</p>
						<ul>
							<li>asfhk</li>
							<li>skjdfk</li>
							<li>sdfhkl</li>
						</ul>
					</div>
				</div>
			<br>
				<div class="px-2">
					<h2>Some Best Designs</h2>
				</div>

				<div class="row mb-3">
					<div class="col-4"><img src="images/k5.jpg" height="132px" class="mx-2 w-100"></div>
					<div class="col-4"><img src="images/k7.jpg" height="132px" class="mx-1 w-100"></div>
					<div class="col-4"><img src="images/k8.jpg" height="132px" class="mr-2 w-100"></div>
					
				</div>

	</div>
</div>
</body>
</html>
<?php 
include('dbcon.php');
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$mob=$_POST['mob'];
	$email=$_POST['email'];
	$qry="INSERT INTO `1`(`name`, `mob`, `email`) VALUES ('$name','$mob','$email')";
	$run=mysqli_query($con,$qry);
	if($run==true)
	{
		?>
		<script type="text/javascript">
			alert("data inserted successfully");
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
			alert("data not inserted");
		</script>
		<?php
		echo "data not inserted";
	}
}


  ?>