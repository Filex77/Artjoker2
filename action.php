<?php
require 'configDB.php';
$username = $_POST['username'];
$email = $_POST['email'];
$territory = $_POST['territory'];
$query = $pdo->query("SELECT * FROM `main` WHERE email = '$email'");
if ($query->rowCount() === 0) {
    $query = $pdo->query("INSERT INTO `main` (username, email, territory) VALUES ('$username', '$email', '$territory' )");
    echo 'Данные записаны';
} else {
    echo "Такой Email уже зарегистрирован ! </br>";
    $row = $query->fetch(PDO::FETCH_OBJ);
    echo 'ФИО: ' . $row->username . "</br>" . 'EMail: ' . $row->email . "</br>" . 'Район: ' . $row->territory . '</br>';
}
echo "<a href =" . $_SERVER['HTTP_REFERER'] . "></br>Ввести новые данные</a>";
