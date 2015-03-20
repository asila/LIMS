<?php
require_once("includes/initialize.php");
?>
 
<?php
if(isset($_POST['pc_id']) && $_POST['pc_id'] != '')
{
  $pc_id = $_POST['pc_id'];
  $pc_id = mysql_real_escape_string($pc_id);
  $query = "select * from site where Country='".$pc_id."'";
  $res = mysql_query($query);
  if(mysql_num_rows($res))
  {
    while($row = mysql_fetch_array($res))
    {
      echo "<option value='".$row['name']."'>".ucfirst($row['name'])."</option>";
    }
  }
}
?>
- See more at: http://www.invlessons.com/change-contents-dynamically-of-a-select-box-depends-on-another-select-box-using-jquery-ajax-php-and-mysql/#sthash.plMs8bkH.dpuf