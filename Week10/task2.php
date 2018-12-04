<html>
	<head>
	  <style>
	    select{
	      width:100%;
	      background:white;
	      padding:5px;
	      border-radius:5px;
	      color:#444444;
	    }
	    input{
	      border-radius:5px;
	      padding:5px;
	    }
	    input[type='text'],input[type='number']{
	      width:calc(100% - 12px);
	    }
	    table tr td{
	      border: 1px solid black;
	      padding:3px;
	      border-collapse: collapse; 
	    }
	  </style>
	</head>
	<?php
    	$makers = ["Toyota","BMW","Mercedes"];
    	$engine = ["gas","diesel","petroleum"];
	?>
	
  <body>
    <form action="task2handle.php" method="post">
    <table>
    	<tr>
     		<td>Maker:</td> <td><select name ="maker" id="makers">
      	<?php
      		for($i=0; $i<sizeof($makers); $i++){
      			echo "<option>". $makers[$i]. "</option>";
      		}
      	?>  
     			     
      		</select>
      	</td>	
  	    </tr>
  	    <tr>
      <td>Year:</td> <td><select name = "years" id = "years">
      	<?php
      		for($i=2018; $i>1998; $i--){
      			echo "<option>". ($i) . "</option>";	
      		}
      	?>

       		</select>
  	  </td>
  	  </tr>

  	  <tr>
      <td>Model:</td> <td><input type="text" name="model" id="model"></td>
      </tr>
      
      <tr>
      <td>Engine:</td> <td><?php
      	for($i=0; $i<sizeof($engine); $i++){
      		echo "<input type = 'radio' name='engine' value='" . $engine[$i] . "' >". $engine[$i];
      	}
      ?>
  	  </td>
  	  </tr>
      
      <tr>
      <td>Price:</td> <td><input type="number" name="Price" id="price"></td>
      </tr>

      <tr>
      <td>Additional:</td> <td><input type="checkbox" name = "tax" value="Yes"> Tax payed <br/>
      			  <input type="checkbox" name = "tech" value="Yes"> technical check passed <br/>
      			  <input type="checkbox" name = "require" value="Yes"> doesnt require investement <br/></td>
     </tr>
 	</table>
      <input type="submit" name="btn"/>
  	
    </form>
  
  </body>
</html>