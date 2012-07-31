<HTML>

<HEAD><TITLE>Control Panel</TITLE></HEAD>



<SCRIPT LANGUAGE="JavaScript">

<!--

	if (document.images) {

		var addon = new Image();

		addon.src = "images/button_add_ro.gif";

		var addoff = new Image();

		addoff.src = "images/button_add.gif";



		var backon = new Image();

		backon.src = "images/button_back_ro.gif";

		var backoff = new Image();

		backoff.src = "images/button_back.gif";

	}



	function act(imgName) {

		if (document.images)

			document[imgName].src = eval(imgName + "on.src");

	}



	function inact(imgName) {

		if (document.images)

			document[imgName].src = eval(imgName + "off.src");

	}

	// -->

</SCRIPT>



<BODY BGCOLOR=#FFFFFF>

<TABLE WIDTH=632 ALIGN=CENTER BORDER=0 CELLSPACING=0 CELLPADDING=0 NORESIZE>

<TR>

    <TD WIDTH=11>&nbsp;</TD>    <TD WIDTH=450><div align="center"><img src="../images/ajbannerUpload.gif" width="300" height="124"><br>
      </div></TD>

    <TD WIDTH=11>&nbsp;</TD>

<TD WIDTH=160><IMG SRC="images/1x1transparent.gif" WIDTH=160 HEIGHT=1></TD>

</TR>

</TABLE>

<TABLE WIDTH=632 ALIGN=CENTER BORDER=0 CELLSPACING=0 CELLPADDING=0 NORESIZE>

<TR> 
  <TD WIDTH=1 VALIGN=TOP BGCOLOR=#FFFFF></TD>

<TD WIDTH=10 VALIGN=TOP BGCOLOR=#FFFFFF></TD>

<TD WIDTH=450 VALIGN=TOP BGCOLOR=#FFFFFF>

<? if ($add_link != "") { ?>

<TABLE WIDTH=450 BORDER=0 CELLPADDING=0 CELLSPACING=0 NORESIZE>

<TR><TD ALIGN=RIGHT><A HREF="<?= $add_link ?>" onmouseout="inact('add')" onmouseover="act('add')"><IMG SRC="images/button_add.gif" name=add border=0 width=44 height=22></A></TD></TR>

</TABLE>

<? } ?>

<BR>

