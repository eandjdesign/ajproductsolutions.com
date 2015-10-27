<?

	session_start();
	
	$users = array(
	"AJUSER1" => "USER1",
	"AJUSER2" => "USER2",
	"AJUSER3" => "USER3"
	);

	$logged = false;

	foreach ($users as $uname => $password) { 
		if ((strtoupper($_POST["UserName"]) == $uname) and (strtoupper($_POST["Password"]) == $password))
		{
			$_SESSION['UserStatus'] = $uname;
			header("Location: uploader_list.php");
			$logged = true;
		}
	} 
	if ($logged == false)
	{
		if ((strtoupper($_POST["UserName"]) == "ARTVILLA") and (strtoupper($_POST["Password"]) == "GREENGREEN"))
		{
			$_SESSION['UserStatus'] = 'ARTVILLA';
			header("Location: uploader_admin.php");
		}
		else
		{
			$_SESSION['UserStatus'] = 'Error';
			header("Location: login.php");
		}
	}
?>

