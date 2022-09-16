
	   
	   
	   
	   
<?php
     
if(isset($_POST['txtno']))
 {	   
    $no=$_POST['txtno'];
   
        $count=1;
		$count1=0;
		$a=0;
		$b=1;
		$c=2;
		$d=2;
		$e=2;
		$f=0;
		$l=65;
		$m=122;
		
		$n=1;
		$o=2;

  
		for ($i=$no;$i>=1;$i--)
		{
		 if($i<=2)
		 {
            echo $i."&nbsp"	;
		 }			
			for($j=1;$j<=$i;$j++)
			{	
			 if($count==1)
                {
                    echo chr($l).$a.chr($m).$n."&nbsp";
                    $l++; 					
			        $count++;
					$m--;
					//$n++;
	            }
			 else if($count==2)
			    {
                    echo chr($l).$b.chr($m).$o."&nbsp";
                    $l++; 					
			        $count++;
					$m--;
					//$o--;
	            }
			 else if($count==3)
			    {
                    echo chr($l).$c.chr($m).$n."&nbsp";
                    $l++; 					
			        $count=0;
					$count1=1;
					$m--;
					//$n++;
	            }	
   		     else if($count1==1)
			    {
				    echo chr($l).$d.chr($m).$o."&nbsp";
					$l++;
					$count1=2;
					$m--;
					//$o--;
				}	
		      else if($count1==2)
			    {
				    echo chr($l).$e.chr($m).$n."&nbsp";
					$l++;
					$count1=3;
					$m--;
					//$n++;
				}	
		
		     else if($count1==3)
			    {
				    echo chr($l).$f.chr($m).$o."&nbsp";
					$l++;
					$count1=0;
					$count=1;
					$m--;
					//$o--;
				}	
		    }
			
		 	    echo "<br>";
				
		}
		
 }	
		
?>		  
 
<form action="pyramid2.php" method="POST">
         <input type="text" name="txtno">
         <input type="submit" value="display">
 </form>		 
      
      
	  
	  
	  	   
