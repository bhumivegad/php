<--1A 2B 3C 4D--N--></br><hr>

<?php
     if(isset($_POST['txtno']))
	  {  
	    $a=65;
		$no=$_POST['txtno'];
		for ($i=1;$i<=$no;$i++)
		     {
			   echo $i.chr($a)."&nbsp";
			   $a++;			
              }          
      }
?>	  
 
<form action="fibo5.php" method="POST">
         <input type="text" name="txtno">
         <input type="submit" value="display">
    </form>		 
      