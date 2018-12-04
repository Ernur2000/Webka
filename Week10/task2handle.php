<?php    	
	$year = (int)$_POST['years'];
	if($_REQUEST["tax"] === null){
	    $add1 = "No";
	} else {
		$add1 = $_REQUEST["tax"];
	}
	if($_REQUEST["tech"] === null){
	   	$add2 = "No";
	} else { 
		$add2 = $_REQUEST["tech"];
	}
	    		
	if($_REQUEST["require"] === null){
	   	$add3 = "No";
	} else {
		$add3 = $_REQUEST["require"];
	}
	echo 'You added new item <strong>' . $_POST['maker'] . ' </strong><br/>';
	echo 'produced in ' . $year . ' ('.(2018 - $year).' years old) with ' . $_POST['engine'] . ' engine <br/>' ;
			
	echo 'Tax payed <strong> ' . $add1 . '</strong><br/>';
	echo 'Technical check passed <strong> ' . $add2 . '</strong><br/>';
	echo 'Doesnt require investment <strong> ' . $add3 . '</strong><br/>';
	echo '$ '.$_POST['Price'];
?>
		   		
	