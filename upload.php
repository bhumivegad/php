<head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js"></script>
</head>

<form action="upload.php" method="POST" enctype="multipart/form-data">
   <input type="text" name="txtroll" placeholder="enter roll no."></br>
   <input type="text" name="txtnm" placeholder="enter name"></br>
   <input type="file" name="niv" id="imgInp" accept=".png,.jpg,.jpeg"></br>
   <img src="" id="blah" alt="select image" height="150" width="150"></br>
   <input type="submit" value="save">
</form>
 <?php
    $con=mysqli_connect("localhost","root","","bhumi");
    if(isset($_POST['txtroll']))
	{  
        if($con)
		{
            $roll=$_POST['txtroll'];
            $nm=$_POST['txtnm'];
            $target_dir="pictuer/";
            $name=rand(150,480000);
            $extension=pathinfo($_FILES["niv"]["name"] ,PATHINFO_EXTENSION);
			$fnm=$name.".".$extension;
			move_uploaded_file($_FILES["niv"]["tmp_name"],$target_dir.$name.".".$extension);
			$sql="INSERT INTO `pic`( `roll no`, `name`, `file`) VALUES ('$roll','$nm' ,'$fnm')";
			mysqli_query($con,$sql);
		}
    }		
			
             			
 ?>  
 <script>
       imgInp.onchange = evt =>
	   {
		   const[file] = imgInp.files
		    if(file)
		   {
			   blah.src=URL.createObjectURL(file)
		   }   
	   }
 
 </script>
 
  <table class="table table-bordered txet-center">
     <div class="container mt-2">
			<tr>
			     <th>sr
				 <th>roll
	             <th>name
		         <th>image		 
                  <th>action
	</div>			  
				  
 <?php
      
         $sql="SELECT * FROM `pic` ";
		 $res=mysqli_query($con,$sql);
		 $i=1;
	   		
	       while($row = mysqli_fetch_assoc($res))
				{
   ?>		    		  
	               <tr>     
                    <td><?php echo $i;?>
					<td><?php echo $row['roll no'];?>
					<td><?php echo $row['name'];?>
					<td><img height="50" width="50" src="<?php echo "pictuer/". $row ['file'];?>">
					<td><a class="btn btn-danger" href="del.php?id=<?php echo $row['id'];?>">Delete</a>
		 <?php
		
		          $i++;
				}
         ?>		
  
</table>