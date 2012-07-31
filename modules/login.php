<?

	session_start();

	$header_image = "header_login.gif";

	$add_link = "";

	$back_link = "";

	$comments = "<FONT COLOR=#CC9900><B>Password</B><FONT COLOR=#CCCCCC><BR>Simply type in your username and password in the fields to the left and press the Enter button to enter the Admin site.<P><FONT COLOR=#CC9900><B>Forgot Your Password?</B><FONT COLOR=#CCCCCC><BR>If you forgot your password you simply have to give Cary a call and have him remind you what your password is.";



	include 'admin_top.php';

?>
<body bgcolor="#6699CC">
&nbsp;<BR>

		<FONT SIZE=2 COLOR=#000000 FACE="Verdana,Arial,Helvetica">

			<TABLE WIDTH=450 BORDER=0 CELLPADDING=0 CELLSPACING=0 NORESIZE>

			<TR>

				<TD WIDTH=450 ALIGN=CENTER>

					<FONT SIZE=2 COLOR=#000000 FACE="Verdana,Arial,Helvetica">

					<? if ($_SESSION['UserStatus'] == "Error") { ?>

					<FONT COLOR=#FF0000><B>ERROR - Invalid User Name and Password</B><BR></FONT>

					<? } ?>

					Please enter your user name and password:

					</TD>

			</TR>

			</TABLE>





		<FORM METHOD=POST ACTION="login2.php" id=form1 name=form1>

		
  <TABLE WIDTH=450 BORDER=0 CELLPADDING=0 CELLSPACING=0 bgcolor="#FFFFFF" NORESIZE>
    <TR>

			<TD WIDTH=200 ALIGN=RIGHT VALIGN=MIDDLE>

				<FONT SIZE=2 COLOR=#000000 FACE="Verdana,Arial,Helvetica">

				<B>User Name:</B>&nbsp;

				</TD>

			<TD WIDTH=250 ALIGN=LEFT VALIGN=MIDDLE>

				<INPUT TYPE=TEXT NAME="UserName" SIZE=20 MAXLENGTH=20>

				</TD>

		</TR>

		<TR>

			<TD WIDTH=200 ALIGN=RIGHT VALIGN=MIDDLE>

				<FONT SIZE=2 COLOR=#000000 FACE="Verdana,Arial,Helvetica">

				<B>Password:</B>&nbsp;

				</TD>

			<TD WIDTH=250 ALIGN=LEFT VALIGN=MIDDLE>

				<INPUT TYPE=PASSWORD NAME="Password" SIZE=20 MAXLENGTH=20>

				</TD>

		</TR>

		</TABLE>

		
  <TABLE WIDTH=450 BORDER=0 CELLPADDING=0 CELLSPACING=0 bgcolor="#FFFFFF" NORESIZE>
    <TR>

			<TD WIDTH=450 ALIGN=CENTER>

				&nbsp;<BR>

				<INPUT TYPE=IMAGE SRC="images/button_enter.gif" WIDTH=57 HEIGHT=22 BORDER=0 NAME="SUBMIT" VALUE="SUBMIT">

				</TD>

		</TR>

		</TABLE>

		</FORM>

<?

	include 'admin_bottom.php';

?>