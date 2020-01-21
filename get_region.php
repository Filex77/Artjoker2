<?php
require 'configDB.php';
$oblast_id=$_POST['oblast_id'];
$query_city = $pdo->query("SELECT ter_name, ter_id FROM `t_koatuu_tree` WHERE `ter_pid`= '$oblast_id'");
while ($row = $query_city->fetch(PDO::FETCH_OBJ)) {
   echo '<option></option><option value=' . $row->ter_id . '>' . $row->ter_name . '</option>';
}
