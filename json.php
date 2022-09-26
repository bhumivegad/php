<?php
     $age=array("peter"=>35,"Ben"=>37,"joe"=>43);
	 echo json_encode($age);
	 $enc='{"peter":35,"Ben":37,"joe":43}';
	 var_dump(json_decode($enc));
?>
