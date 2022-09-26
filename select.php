<form action="select.php" method="POST">
   <select name="s1">
		 <option value='1'>1</option>
		 <option value='2'>2</option>
	</select>
   <?php
		if(isset($_POST['s1']))
		{
			$s1=$_POST['s1'];
			if($s1==2)
			{			
    ?>
   <select>
        <option>3</option>
		<option>4</option>
	</select>
	<?php
			}
		} 
	?>
  <input type="submit" value="save">
  </form>	
