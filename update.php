<?php
include 'config.php';

$edit_name = $_POST['edit_name'];
$edit_email = $_POST['edit_email'];
$edit_password = $_POST['edit_password'];
$get_id = $_GET['id'];
if (isset($_POST['edit-submit'])) {
	$sqll = "UPDATE users SET updated_at=NOW(), name=?, email=?, password=? WHERE id=?";
	$querys = $pdo->prepare($sqll);
	$querys->execute([$edit_name, $edit_email, $edit_password, $get_id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}