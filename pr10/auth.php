<?php
session_start();
require_once 'connection.php'; 
	if (count($_POST)>0) {
		$res = mysqli_query ($conn, "SELECT * FROM `users` WHERE `login` ='".$_POST['login']."' AND `password` ='".$_POST['password']."'");
		$row = mysqli_fetch_array($res);
		if (is_array($row)){
			$_SESSION['logged_user'] = $row['login'];
            header('Location: restricted.php');
            exit;
    } else {
        echo 'Invalid password';
       }
}
