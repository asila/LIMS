<link rel="stylesheet" href="mstyle.css">
<?php
$q = $_GET['q'];

include 'conn.php';
$sql="SELECT name FROM site";

$result = mysqli_query($sql);
?>
<tr>
<td >
<select name="Site" id="Site" >
<option value="" selected></option>
<?php
while ($rows = mysql_fetch_array($result))
{ 
 $col++;
echo  '<option value=',$rows[name],'>',$rows[name],'</option>';

 }
?>
 </select>

			</td>
			  </tr>	
