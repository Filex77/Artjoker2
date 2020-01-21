<?php
require 'configDB.php';
$city_id = $_POST['city_id'];
$query_ter = $pdo->query("SELECT ter_address, ter_id, ter_type_id FROM `t_koatuu_tree` WHERE (`ter_pid`= '$city_id') OR( (`ter_type_id`=1)AND(`ter_id`= '$city_id'))");
while ($row = $query_ter->fetch(PDO::FETCH_OBJ)) {
   echo '<option></option><option value="' . $row->ter_address .'"'. '>' . $row->ter_address . '</option>';
}