<?

	session_start();

	if ($_SESSION['UserStatus'] == 'Error' or $_SESSION['UserStatus'] == '')

		header("Location: login.php");

?>