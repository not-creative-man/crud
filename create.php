<?php
include 'config.php';

$created_at = $_POST['created_at'];
$updated_at = $_POST['updated_at'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Create

if (isset($_POST['submit'])) {
	$sql = ("INSERT INTO `users`(`created_at`, `name`, `email`, `password`) VALUES(NOW(),?,?,?)");
	$query = $pdo->prepare($sql);
	$query->execute([$name, $email, $password]);
	$success = '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Данные успешно отправлены!</strong> Вы можете закрыть это сообщение.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
	
}

?>