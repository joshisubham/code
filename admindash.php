<?php 
session_start();
		if(isset($_SESSION['uid']))
		{
			echo "";
		}
		else
		{
			header('location:adminlogin.php');
		}
 ?>

<?php 
include('adminhead.php');
 ?>
 <div><a href="logout.php" class="bg-light px-3 py-1" style="color:black; float: right;">logout</a></div>
 <div><a href="client.php" class="bg-light px-3 py-1 my-2" style="color:black;float: right;">Click to see the details</a></div>

 		<!------------------------------------------------------------------------------------------------------------------------------>
 <div>
 	
 		<form action="admindash.php" method="post" enctype="multipart/form-data">
 		<table style="border:4px solid black;" class="mt-2 mx-auto my-2 mb-1">
 			<tr><td class="pt-2 px-2 bg-danger" colspan="2"><h4 class="text-uppercase">insert</h4></td></tr>
 			<tr>
 				<td class="px-3"><input type="text" name="dname" placeholder="enter image name" class="form-control py-1"required></td>
 				<td class="p-1 px-3"><input type="file" name="dimg" placeholder="choose design" class="mr-4 py-1" required></td>
 			</tr>
 			<tr>
 				<td class="p-1" colspan="2"><input type="submit" name="isub" value="insert" class="btn btn-block py-1"></td>
 			</tr>
 		</table>
 		</form>
 </div>
 <?php 
 if(isset($_POST['isub']))
 {	include('../dbcon.php');
 	$dname=$_POST['dname'];
	$img=$_FILES['dimg']['name'];
	$tempname=$_FILES['dimg']['tmp_name'];
	move_uploaded_file($tempname, "../dataimg/$img");
	$qry="INSERT INTO `insertd`(`dname`, `simg`) VALUES ('$dname','$img')";
	$run=mysqli_query($con,$qry);
	if($run==true)
	{
		?>
		<script type="text/javascript">
			alert("design inserted");
			window.open('admindash.php','_self');
		</script>
		<?php
		}
		else
		{
			echo "error";
		}
	}
?>

<!-------------------------------------------------------------------------------------------------------------------------------------------->
 	<div id="da1">

 			<form method="post" action="admindash.php">
 				<h4 class="text-uppercase bg-success p-1">delete</h4>
 				<input type="number" name="id" placeholder="enter id number" class="form-control my-2" required>
 				<input type="submit" name="dsub" value="delete" class="form-control my-2">
 			</form>
 			<div>
 			<table id="da3" class="mx-auto my-2 mb-1">
 				<tr id="da3">
 					<th id="da4" class="p-1 px-3 bg-danger">id</th>
 					<th id="da4" class="p-1 px-4 bg-danger">name</th>
 					<th id="da4" class="p-1 px-5 bg-danger">image</th>
 					<th id="da4" class="p-1 px-4 bg-danger">delete</th>
 				</tr>
 				<?php 
 				include('../dbcon.php');
 				if(isset($_POST['dsub']))
 				{
 					include('../dbcon.php');
 					$id=$_POST['id'];
 					$qry="SELECT * FROM `insertd` WHERE `id` LIKE '%$id%'";
 					$run=mysqli_query($con,$qry);
 					if(mysqli_num_rows($run)<1)
 					{
 						?>
 						<tr id="da3"><td colspan="4" class="p-2 px-5 text-center">no such record</td></tr>
 						<?php
 					}
 					else
 					{
 						$data=mysqli_fetch_assoc($run);
 						?>
 				<tr id="da3">
					<td id="da3" class="p-1 px-3"><?php echo $data['id']; ?></td>
					<td id="da3" class="p-1 px-4"><?php echo $data['dname']; ?></td>
					<td id="da3" class="p-1 px-5"><img src="../dataimg/<?php echo $data['simg']; ?>" style="max-width: 100px;"></td>
					<td id="da3" class="p-1 px-4"><a href="delete.php?sid=<?php echo $data['id']; ?>" style="color:black;">Delete</a></td>
				</tr>
			</table>
			</div>
						<?php
 					}
 				}
 			?>
 	</div>
<!--------------------------------------------------------------------------------------------------------------------------------------------->
 <div>
 	<form method="post" action="admindash.php">
 		
 		<table class="pr-5 mt-3">
 			<tr><td colspan="5"><h4 id="ua1" class="bg-success mt-2 p-1">UPDATE</h4></td></tr>
 			<tr>
 				<td class="py-1 pr-2 pl-1">ID: </td>
 				<td class="pl-1"><input type="number" name="cid" class="form-control"></td>
 				<td class="py-1 pl-4">Name:</td>
 				<td class="pl-1"><input type="name" name="cname" class="form-control"></td>
 				<td class="py-1 pl-1 pr-1" colspan="2"><input type="submit" name="csub" class="btn px-4"></td>
 			</tr>
 		</table>
	 </form>
 	<table class="mx-auto my-2 mb-1">
 		<tr>
 			<th id="ua2" class="p-1 px-3 bg-danger">count</th>
 			<th id="ua2" class="p-1 px-4 bg-danger">id</th>
 			<th id="ua2" class="p-1 px-5 bg-danger">name</th>
 			<th id="ua2" class="p-1 px-5 bg-danger">image</th>
 			<th id="ua2" class="p-1 px-3 bg-danger">change</th>
 		</tr>
 	<?php
 	include('../dbcon.php');
 	if(isset($_POST['csub']))
 	{
 		$cid=$_POST['cid'];
 		$cname=$_POST['cname'];
 		$qry="SELECT * FROM `insertd` WHERE `id`='$cid' AND `dname`LIKE '%$cname%'";
 		$run=mysqli_query($con,$qry); 
 		if(mysqli_num_rows($run)<1)
 		{
 			echo "<tr><td colspan='5' class='mx-auto'>no records found</td></tr>";
  		}
 		else
 		{	$count=0;
 			while($data=mysqli_fetch_assoc($run))
 			{
 				$count++;
 				?><!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
 			<tr id="ua2">
 				<td id="ua2" class="p-1 px-3"><?php echo $count; ?></td>
 				<td id="ua2" class="p-1 px-4"><?php echo $data['id']; ?></td>
 				<td id="ua2" class="p-1 px-5"><?php echo $data['dname']; ?></td>
 				<td><img src="../dataimg/<?php echo $data['simg']; ?>" style="max-width: 140px;" class="p-1 px-4"></td>
 				<td id="ua2" class="p-1 px-3"><a href="updateform.php?sid=<?php echo $data['id']; ?>" id="ua3">edit</a></td>
 			</tr>
 			<?php
 				}
 		}
 	}
 ?>
</table>
</div>
<!--------------------------------------------------------------------------------------------------------------------------------------------->

 <?php 
include('adminfoot.php');
  ?>