<?php
	session_start();
	require_once 'dbConnect.php';

	$nameUser = $_POST['loginName'];
	$passUser = md5($_POST['loginPass']);

	$check_user = mysqli_query(
		$dbConnection, 
		"SELECT * FROM `User` WHERE `nameUser` = '$nameUser' AND `passUser` = '$passUser'"
	);

	if (mysqli_num_rows($check_user) === 0) {
		$_SESSION['err'] = 'Неверный логин или пароль!';
		header('Location: ../index.php');
		return;
	}

	$user = mysqli_fetch_assoc($check_user);
	$_SESSION['user'] = [
		"id" => $user['idUser'],
		"name" => $user['nameUser'],
		"email" => $user['emailUser'],
		"avatar" => $user['avatarUser']
	];

	header('Location: ../index.php');
	return;
?>
