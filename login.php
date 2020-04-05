<?php
session_start();
$title = 'Authorization';
require 'header.php';
require 'connect.php';
?>
<body>
<div class="container mt-4">
    <form action="" method="POST" class="got_form">
        <h1 align="center"><?= $title ?></h1><br>
        <input type="text" class="form-control" name="login" placeholder="login" required>
        <input type="password" class="form-control" name="password" placeholder="password" required><br>
        <button name="sendTask" class="btn btn-success btn-lg btn-primary btn-block" type="submit">Log In</button>
        <a href="registration.php" class="btn btn-dark btn-lg btn-primary btn-block">Registration</a>
    </form>
</div>

<?php
if (isset($_POST['login'], $_POST['password'])) {
	$login = $_POST['login'];
	$password = $_POST['password'];

	$query = "SELECT * FROM users WHERE login='$login' and password='$password'";
	$result = mysqli_query($conn, $query);
	$count = mysqli_num_rows($result);

	if ($count === 1) {
		$_SESSION['login'] = $login;
	} else {
		$failMes = 'Error, try again!';
	}
}

if (isset($_SESSION['login'])) {
	$login = $_SESSION['login'];
	echo "Hello $login!";
	echo "<br><a href='logout.php' class='btn btn-lg btn-dark btn-primary'>Log Out</a>";
} else {
	echo "<h2>$failMes</h2>";
}
?>

</body>
</html>