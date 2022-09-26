<form action="session.php" method="POST">
		<input type="text" name="txtval" placeholder="enter">
		<input type="submit" value="save">
</form>

<form action="session.php" method="POST">		
<?php
     if(isset($_POST['txtval']))
	   {
	      SESSION_start();
		   $_SESSION['count']=$_POST['txtval'];
		  for ($i=1;$i<=$_SESSION['count'];$i++)
		  {
		   ?>
		      <input type ="text" name="txtval<?php echo $i;?>"required</br>
			  <?php
			  }
			  ?>
			  <input type="submit" value="store">
			  
			 </form>
       <?php
          }
            if(isset($_POST['txtarray']))
            {
                session_start();
                 for($i=1;$i<=$_SESSION['count'];$i++)
                 {
                    $array[$i]=$_POST['txtarray'.$i];
					echo $array[$i];
					}
					
		 } 
?>
