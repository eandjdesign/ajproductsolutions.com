<?

/*

	Uploader Module

	Copyright 2002 Cary Stanley

*/

	include 'security.php';

	include 'connection.php';

	session_start();

$path = "../filetransfer/";



	$header_image = "header_uploader.gif";

	$add_link = "uploader_form.php?action=add";

	$back_link = "mainmenu.php";

	$comments = "<FONT COLOR=#CC9900><B>Add</B><FONT COLOR=#CCCCCC><BR>To add an entry, simply press the add button of the left side and you will be prompted for the information.<P><FONT COLOR=#CC9900><B>Edit</B><FONT COLOR=#CCCCCC><BR>To edit and existing entry simply click on the edit button to the right of that article and you will be given its data in order to make changes.<P><FONT COLOR=#CC9900><B>Delete</B><FONT COLOR=#CCCCCC><BR>To delete an entry simply click the delete button to the right of the entry.";


include 'admin_top.php';

$dir = @opendir($path);

while (($folder = readdir($dir)) != false)
	if (($folder != ".") and ($folder !=".."))
{
$subdir = @opendir($path."/".$folder);
?>
		<TABLE WIDTH=450 BORDER=0 CELLPADDING=0 CELLSPACING=0 NORESIZE>
		<TR>
			<TD WIDTH=450 ALIGN=LEFT>
				<FONT SIZE=2 FACE=Verdana,Arial,Helvetica COLOR=#FFAAAA>
				&nbsp;<B><?= $folder ?></B>
				</FONT>
				</TD>
		</TR>
		</TABLE>
		<TABLE BGCOLOR=#CCCCFF WIDTH=450 BORDER=0 CELLPADDING=0 CELLSPACING=0 NORESIZE>
			<TR><TD><IMG SRC="images/dot_clear.gif" WIDTH=1 HEIGHT=1></TD></TR>
		</TABLE>
<?
while (($file = readdir($subdir)) != false)
	if (($file != ".") and ($file !=".."))
{
?>
		<TABLE WIDTH=450 BORDER=0 CELLPADDING=0 CELLSPACING=0 NORESIZE>
		<TR>
			<TD WIDTH=415 ALIGN=LEFT>
				<FONT SIZE=2 FACE=Verdana,Arial,Helvetica>
				&nbsp;<B><A HREF="<?= $path.$folder."/".$file ?>"><?= $file ?></A></B>
				</FONT>
				</TD>
			<TD WIDTH=35 ALIGN=CENTER VALIGN=Middle>
				<FONT SIZE=2 FACE=Verdana,Arial,Helvetica>
				<B><A HREF="uploader_form.php?action=delete&filename=<?= $file ?>"><IMG SRC="images/button_delete.gif" width=32 height=12 border=0></A></B>
				</FONT></TD>
		</TR>
		</TABLE>
		<TABLE BGCOLOR=#CCCCFF WIDTH=450 BORDER=0 CELLPADDING=0 CELLSPACING=0 NORESIZE>
			<TR><TD><IMG SRC="images/dot_clear.gif" WIDTH=1 HEIGHT=1></TD></TR>
		</TABLE>
<?
}
	closedir($subdir);
}
	closedir($dir);
	
	

	include 'admin_bottom.php';

?>





