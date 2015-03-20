<?php
echo "<div style=\"float:left;\"></div>";
 for ($i = 0; $i<20; $i++){
    echo '<div style="float:left;background-color:grey;height:20px;width:'.$i.'px"></div>';
    ob_flush();
    flush();
    usleep(100000);
 }
 echo "<div style=\"float:left\"></div>";
 ob_end_flush();exit;
?>