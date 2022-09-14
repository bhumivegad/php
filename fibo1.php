<---1 2 3 6 18 108---n--></br><hr>

<?php
      if(isset($_POST['txtno']))
	   {
	         $no=$_POST['txtno'];
			 $a=2;
			 $b=3;
			 for ($i=1;$i<=$no;$i++)
		     {
			    if($i<=3) 
				{
					echo $i."&nbsp";
			    }
             	else
                { 
                       $c=$a*$b;
					   echo $c."&nbsp";
                       $a=$b;
                       $b=$c;
                }
              }
        }
?>		



   <form action="fibo1.php" method="POST">
         <input type="text" name="txtno">
         <input type="submit" value="display">
    </form>		 
      