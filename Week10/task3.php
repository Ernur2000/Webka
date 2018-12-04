<?php
$makers = ["Toyota","BMW","Mercedes"];
$engine = ["gas","diesel","petroleum"];
$cars = [["id"=>"0","maker"=>"Toyota","model"=>"Corolla","year"=>"2015","engine"=>"petroleum","price"=>"30000","additional"=>["tax","investment"]],["id"=>"1","maker"=>"BMW","model"=>"X5","year"=>"2012","engine"=>"gas","price"=>"25000","additional"=>["tax","investment","check"]],["id"=>"2","maker"=>"Toyota","model"=>"Camry","year"=>"2008","engine"=>"diesel","price"=>"35000","additional"=>["investment","check"]]];
$selected_car = NULL;
if (isset($_REQUEST["id"])){
	$selected_car = $cars[$_REQUEST["id"]];
}
?>
<html>
<head>
<style>
select{
  width:200px;
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
}
table, tr, td{ 
    border-collapse: collapse; 
}
#choise{
  margin-bottom: 5px;
}
</style>
</head>
<body>
<form action="task9_3.php" method="post">
<select id = "choise" name="id" onchange="this.parentNode.submit()">
	<option value="-1">Select car</option>
  <option value="0">Toyota(2015)</option>
  <option value="1">BMW</option>
  <option value="2">Toyota(2008)</option>
</select>
      
<?php 
    
?>

  <table>
      <tr>
        <td>Maker:</td> <td><select name ="maker" id="makers">
        <?php
          for($i=0; $i<sizeof($makers); $i++){
            echo '<option';
            if($selected_car['maker'] == $makers[$i]){
              echo ' selected ';
            }
            echo '>' . $makers[$i] . '</option>';  
          }
          
        ?>  
               
          </select>
        </td> 
        </tr>
        <tr>
      <td>Year:</td> <td><select name = "years" id = "years">
        <?php
          for($i=2018; $i>1998; $i--){
            echo '<option ';
            if ($selected_car['year'] == $i){
              echo ' selected ';
            }
            echo '>' . ($i) . '</option>';  
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
          echo '<input type="radio" name="engine" ';
          if($selected_car['engine'] == $engine[$i]){
            echo ' checked ';
          }
          echo ' value="'.$engine[$i].'"> '.$engine[$i].'<br>';
        }
      ?>
      </td>
      </tr>
      
      <tr>
      <td>Price:</td> <td><input type="number" name="Price" id="price" value="<?php echo $selected_car['price'] ;?>"></td>
      </tr>

      <tr>
      <td>Additional:</td> <td>
        <input type="checkbox" name="additional1" value="yes" <?php if(in_array('tax', $selected_car['additional'])){echo ' checked ';} ?>> tax payed<br>
    <input type="checkbox" name="additional2" value="yes" <?php if(in_array('check',$selected_car['additional'])){echo ' checked ';} ?> > technical check passed<br>
    <input type="checkbox" name="additional3" value="yes" <?php if(in_array('investment',$selected_car['additional'])){echo 'checked';} ?> >doesn't require investment<br>


      </td>
     </tr>
  </table>

<?php
	/* Enter your code here  */
?>
    <input type="submit"/>
</form>
</body>
</html>