<?php 
include('includes/header.php');
include('includes/adminhead.php');
?>
<!------------------------------------------------------>
<section>
	<div class="well-lg">
		<div><h4 class="text-center">Fill New Student Details</h4></div>
		<div>
			<form method="get" action="insertdata.php">
				<div class="well-lg">
					<div class="form-group">
						<label>Name:</label>
						<input type="text" name="studentname" class="form-control" pattern="[a-zA-Z]*" autofocus autocomplete="off" required placeholder="Enter Student Name Here">
					</div>
					<div class="form-group">
						<label>Class:</label>
						<input type="number" name="studentclass" class="form-control" pattern="[0-9]*" autofocus autocomplete="off" min="1" max="12" required placeholder="Enter Class Here">
					</div>
					<div class="form-group">
						<label>Age:</label>
						<input type="number" name="studentage" class="form-control" pattern="[0-9]*" autofocus autocomplete="off" min="5" max="19" required placeholder="Enter Age Here">
					</div>
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-block form-control" value="Submit the Details" style="background-color: #e2dc23;" autofocus>
					</div>
		</div>
			</form>
		</div>
	</div>
</section>
<!------------------------------------------------------>
<?php 
include('includes/footer.php');
 ?>

 <?php 
 	if(isset($_GET['submit']))
 	{
 		$studentname=$_GET['studentname'];
 		$studentclass=$_GET['studentclass'];
 		$studentage=$_GET['studentage'];
 		$qry="INSERT INTO `studentlogin`( `name`, `class`, `age`) VALUES ('$studentname','$studentclass','$studentage')";
 		include('dbcon.php');
 		$run=mysqli_query($con,$qry);
 		if($run==true)
 		{
 			?>
 			<script type="text/javascript">
 				alert("Your New Student Details have been Submitted");
 			</script>
 			<?php 
 		}
 		else{
 			?>
 			<script type="text/javascript">
 				alert("Data insertion Failed: ERROR");
 			</script>
 			<?php 

 		}

 	}
  ?>