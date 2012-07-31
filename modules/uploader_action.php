<?

/*

	Uploader Module

	Copyright 2002 Cary Stanley

*/

	include 'connection.php';

	include 'action_toolbox.php';
	session_start();


$action = $_POST['action'];

$path = "../filetransfer/".$_SESSION['UserStatus']."/";



if ($action == 'add')

{

	move_uploaded_file($_FILES['file1']['tmp_name'], $path . $_FILES['file1']['name']);

}

elseif ($action == 'delete')

{

	unlink($path . $_POST["filename"]);

}



header("Location: uploader_list.php");

?>

