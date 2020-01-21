<?php
require 'configDB.php';
$query = $pdo->query('SELECT ter_id, ter_name FROM `t_koatuu_tree` WHERE `ter_type_id` = 0');
while ($row = $query->fetch(PDO::FETCH_OBJ)) {
   echo '<option value=' . $row->ter_id . '>' . $row->ter_name . '</option>';
}
