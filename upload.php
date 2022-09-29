<form action="" method="POST" enctype="multipart/form-data">
   <input type="text" name="txtroll" placeholder="enter roll no."></br>
   <input type="text" name="txtnm" placeholder="enter name"></br>
   <input type="file" name="niv" accept=".png,.jpg,.jpeg"></br>
   <img src="" alt="select image" height="150" width="150"></br>
   <input type="submit" value="save">
</form>
 <?php
    if(isset($_POST['txtroll']))
	{
        $con=mysqli_connect("localhost","root","","bhumi");
        if($con)
		{
            $roll=$_POST['txtroll'];
            $nm=$_POST['txtnm'];
            $target_dir="pictuer/";
            $name=rand(150,480000);
            $extension=pathinfo($_FILES["niv"]["name"],PATHINFO_EXETENSION);
			$fnm=$name.$extension;
			move_uploaded_file($_FILES["niv"]["pictuer"],$target_dir.$name.".".$extension);
			$sql="INSERT INTO `pic`( `roll no`, `name`) VALUES ('$roll','$nm')";
			mysqli_query($con,$sql);
		}
    }		
			
             			
 ?>  