<--1 0 1 0 1---n--></br><hr>


<?php
     if(isset($_POST['txtno']))
	  {  
	    
		$no=$_POST['txtno'];
		
		for ($i=1;$i<=$no;$i++)
		     {
			   if($i%2==0)
						{
							echo "o"."&nbsp";
						}
						else
						{ 
						    
							echo "1"."&nbsp";
							
                        }
              }          
      }
?>	  
 
<form action="fibo4.php" method="POST">
         <input type="text" name="txtno">
         <input type="submit" value="display">
    </form>		 
      