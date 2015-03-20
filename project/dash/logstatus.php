<?php
require_once("../includes/initialize.php");
$res = mysql_query("SELECT COUNT(formtb.service_no) AS total_sites, formtb.site FROM formtb  GROUP BY formtb.site ORDER BY total_sites DESC LIMIT 50;");

// fetch all rows from the query
$all_rows = array();
while($row = mysql_fetch_array($res)) {
    $all_rows []= $row;
}

header("Content-Type: application/json");
echo json_encode($all_rows);
?>
