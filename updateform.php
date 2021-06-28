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
include('../dbcon.php');
$sid=$_GET['sid'];
$sql="SELECT * FROM `insertd` WHERE `id`='$sid'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
 ?>
<div><a href="logout.php" class="bg-light px-3 py-1" id="up1">logout</a></div>


 <div>
 	<form action="updatef.php" method="post" enctype="multipart/form-data">
 		<table>
 			<tr><td colspan="2"><h4 class="text-uppercase" id="up2">EDIT</h4></td></tr>
 			<tr>
 				<td><input type="text" name="dname" placeholder="<?php echo $data['dname']; ?>" class="form-control"required></td>
 				<td><input type="file" name="dimg" class="m-4" required></td>
 			</tr>
 			<tr>
 				<input type="hidden" name="sid" value="<?php echo $data['id']; ?>">
 				<td colspan="2"><input type="submit" name="usub" value="update" class="btn btn-block mb-3"></td>
 			</tr>
 		</table>
 	</form>
</div>
<?php 
include('adminfoot.php');
 ?>
