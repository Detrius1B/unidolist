<?php
$title = 'Registration';
require 'header.php';
?>
<body>
<?php
require 'connect.php';

if (isset($_POST['login'], $_POST['password'])) {
	$login = $_POST['login'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "INSERT INTO users (login, email, password) VALUES ('$login','$email','$password')";
	$result = mysqli_query($conn, $query);

	if ($result) {
		$sucReg = 'Successful registration';
	} else {
		$failReg = 'Failed registration';
	}
}
?>
<div class="container mt-4">
    <form action="" method="POST" class="got_form">
        <h1 align="center"><?= $title ?></h1><br>
        <input type="text" class="form-control" name="login" placeholder="login" required>
        <input type="email" class="form-control" name="email" placeholder="email" required>
        <input type="password" class="form-control" name="password" placeholder="password" required><br>
		<?php if (isset($sucReg)): ?>
            <div class="alert alert-success"><?= $sucReg ?></div><?php endif; ?>
		<?php if (isset($failReg)): ?>
            <div class="alert alert-danger"><?= $failReg ?></div><?php endif; ?>
        <button name="sendTask" class="btn btn-success btn-lg btn-primary btn-block" type="submit">Registration</button>
        <a href="login.php" class="btn btn-dark btn-lg btn-primary btn-block">Log In</a>
    </form>
</div>


</body>
</html>