<?php
    $con=mysqli_connect("localhost","root","","bhumi");
	if(isset($_FILES['image']))
	{   
		if($con).
		{
            
            $target_dir="picture/";
            $name=rand(150,480000);
            $extension=pathinfo($_FILES["putti"]["name"] ,PATHINFO_EXTENSION);
			$fnm=$name.".".$extension;
			move_uploaded_file($_FILES["putti"]["tmp_name"],$target_dir.$name.".".$extension);
			$sql="INSERT INTO `image`(`picture`) VALUES ('$newfile')";
			mysqli_query($con,$sql);
		}
    }		
			
             			
 ?> 
<form action="pic.php" method="POST" enctype="multipart/form-data">
<div class="container mt-2">
<input type="file" name="image"  id="impInp" accept=".jpg ,.png,.jpeg">
<img src="" id="blah" alt="select image" height="200" width="200">
 </div>
</form> 
 <table class="table table-bordered text-center ">
<div class="container mt-2">
  <?php
		$sql="SELECT * FROM `image`";
		$res=mysqli_query($con,$sql);
		while($row=mysqli_fetch_assoc($res))
		{
 ?>
  <tr>
     <td><img src="<?php echo "image/".$row['image'];?>" height="100" width="100">
	<?php
	      }
		?>
</div>
</table>		 