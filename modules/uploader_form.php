<?

/*

	Uploader Module

	Copyright 2002 Cary Stanley

*/

	include 'security.php';

	include 'connection.php';

	include 'form_toolbox.php';

	session_start();

	$path = "../filetransfer/".$_SESSION['UserStatus']."/";



	$header_image = "header_uploader.gif";

	$add_link = "";

	$back_link = "uploader_list.php";



	include 'admin_top.php';

?>

<CENTER><IMG SRC="images/header_<?= $_GET['action'] ?>.gif" width=140 height=36></CENTER><BR>

<FORM enctype="multipart/form-data" METHOD="POST" ACTION="uploader_action.php">

<TABLE WIDTH=450 BORDER=0 CELLPADDING=0 CELLSPACING=0 NORESIZE>

<?



	if ($_GET['action'] == 'add')

	{

?>

<TR>

	<TD WIDTH=200 ALIGN=RIGHT VALIGN=MIDDLE>

		<FONT SIZE=2 COLOR=#000000 FACE="Verdana,Arial,Helvetica">

		<B>File:</B>&nbsp;

		</TD>

	<TD WIDTH=250 ALIGN=LEFT VALIGN=MIDDLE>

		<INPUT TYPE=FILE NAME="file1" SIZE=20>

		</TD>

</TR>

<?

	}

	else

	{

?>

<TR>

	<TD WIDTH=200 ALIGN=RIGHT VALIGN=MIDDLE>

		<FONT SIZE=2 COLOR=#000000 FACE="Verdana,Arial,Helvetica">

		<B>File: </B>&nbsp;

		</FONT></TD>

	<TD WIDTH=250 ALIGN=LEFT VALIGN=MIDDLE>

		<FONT SIZE=2 COLOR=#AA0000 FACE="Verdana,Arial,Helvetica">

		<B><?= $_GET['filename'] ?></B>&nbsp;

		</FONT></TD>

</TR>

<?

	}



	FormEnd("uploader_list.php", "filename", $_GET["filename"]);



	include 'admin_bottom.php';



	DumpData();

?>