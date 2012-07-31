<?

/*

	Form Toolbox

	Copyright 2002 Cary Stanley

*/



function LoadData($Table, $FieldName, $Value)

{

	global $db;

	global $fillinfo;

	global $rs;



	$fillinfo = (($_GET['action'] == "edit") or ($_GET['action'] == "delete"));



	if ($fillinfo)

	{

		$sqlstr = "Select * from " . $Table . " where " . $FieldName . " = " . $Value;

		$result = mysql_query($sqlstr, $db);

		if(!$result) echo $sqlstr."<BR>".mysql_errno() . ": " . mysql_error() . "<BR>";

		$rs = mysql_fetch_array($result);

	}

}



function DumpData()

{



}



function FormStart($ActionPage)

{

?>

<CENTER><IMG SRC="images/header_<?= $_GET['action'] ?>.gif" width=140 height=36></CENTER><BR>

<FORM METHOD="POST" ACTION="<?= $ActionPage ?>">

<TABLE WIDTH=450 BORDER=0 CELLPADDING=0 CELLSPACING=0 NORESIZE>

<?

}



function FormEnd($CancelPage, $KeyName, $Value)

{

?>

</TABLE>

<INPUT TYPE="Hidden" Name="<?= $KeyName ?>" Value="<?= $Value ?>">

<INPUT TYPE="Hidden" Name="action" Value="<?= $_GET['action'] ?>">

<BR>

<CENTER>

<A HREF="<?= $CancelPage ?>"><IMG SRC="images/button_cancel.gif" width=57 height=22 border=0></A>

&nbsp;&nbsp;<INPUT TYPE="Image" SRC="images/button_ok.gif" width=57 height=22 name="submit">

</CENTER></FORM>

<?

}



function MakeText($caption, $FieldName, $maxlen)

{

	global $fillinfo;

	global $rs;

?>

<TR>

	<TD WIDTH=200 ALIGN=RIGHT VALIGN=MIDDLE>

		<FONT SIZE=2 COLOR=#000000 FACE="Verdana,Arial,Helvetica">

		<B><?= $caption ?></B>&nbsp;

		</TD>

	<TD WIDTH=250 ALIGN=LEFT VALIGN=MIDDLE>

		<INPUT TYPE=TEXT NAME="dataq<?= $FieldName ?>" SIZE=20 MAXLENGTH=<?= $maxlen ?> VALUE="<?if ($fillinfo) echo $rs[$FieldName] ?>">

		</TD>

</TR>

<?

}



function MakeHiddenNumber($FieldName, $val)

{

	global $fillinfo;

	global $rs;

?>

	<INPUT TYPE=HIDDEN NAME="data_<?= $FieldName ?>" VALUE="<? if ($fillinfo) echo $rs[$FieldName]; else echo $val; ?>">

<?

}



function MakeHiddenText($FieldName, $val)

{

	global $fillinfo;

	global $rs;

?>

	<INPUT TYPE=HIDDEN NAME="dataq<?= $FieldName ?>" VALUE="<? if ($fillinfo) echo $rs[$FieldName]; else echo $val; ?>">

<?

}



function MakeNumber($caption, $FieldName)

{

	global $fillinfo;

	global $rs;

?>

<TR>

	<TD WIDTH=200 ALIGN=RIGHT VALIGN=MIDDLE>

		<FONT SIZE=2 COLOR=#000000 FACE="Verdana,Arial,Helvetica">

		<B><?= $caption ?></B>&nbsp;

		</TD>

	<TD WIDTH=250 ALIGN=LEFT VALIGN=MIDDLE>

		<INPUT TYPE=TEXT NAME="data_<?= $FieldName ?>" SIZE=20 MAXLENGTH=10 VALUE="<? if ($fillinfo) echo $rs[$FieldName]; ?>">

		</TD>

</TR>

<?

}



function MakePicture($caption, $FieldName)

{

	global $fillinfo;

	global $rs;

	global $db;

	$sqlstr = "Select * from Picture";

	$picresult = mysql_query($sqlstr, $db);

?>

<TR>

	<TD WIDTH=200 ALIGN=RIGHT VALIGN=MIDDLE>

		<FONT SIZE=2 COLOR=#000000 FACE="Verdana,Arial,Helvetica">

		<B><?= $caption ?></B>&nbsp;

		</TD>

	<TD WIDTH=250 ALIGN=LEFT VALIGN=MIDDLE>

		<SELECT NAME="data_<?= $FieldName ?>">

		<OPTION VALUE="0" <? if ($fillinfo) if ($rs[$FieldName] == 0) echo "SELECTED" ?>>None</OPTION>

		<? while ($picrs = mysql_fetch_array($picresult)) { ?>

			<OPTION VALUE="<?= $picrs['PictureID'] ?>" <? if ($fillinfo) if ($rs[FieldName] == $picrs["PictureID"]) echo "SELECTED" ?>><?= $picrs["Title"] ?></OPTION>

		<? } ?>

		</SELECT>

		</TD>

</TR>

<?

}



function MakeFile($Caption, $FieldName, $Directory)

{

	global $fillinfo;

	global $rs;

	$dir = @opendir($Directory);

 ?>

<TR>

	<TD WIDTH=200 ALIGN=RIGHT VALIGN=MIDDLE>

		<FONT SIZE=2 COLOR=#000000 FACE="Verdana,Arial,Helvetica">

		<B><?= $Caption ?></B>&nbsp;

		</TD>

	<TD WIDTH=250 ALIGN=LEFT VALIGN=MIDDLE>

		<SELECT NAME="dataq<?= $FieldName ?>">

		<OPTION VALUE="" <? if ($fillinfo) if ($rs[$FieldName] == "") echo "SELECTED" ?>>None</OPTION>

		<? while (($file = readdir($dir)) != false)

				if (($file != ".") and ($file !="..")) { ?>

			<OPTION VALUE="<?= $file ?>" <? if ($fillinfo) if ($rs[$FieldName] == $file) echo "SELECTED" ?>><?= $file ?></OPTION>

		<? } ?>

		</SELECT>

		</TD>

</TR>

<?

	closedir($dir);

}



function MakeRange($caption, $FieldName, $start_num, $end_num)

{

	global $fillinfo;

	global $rs;

?>

<TR>

	<TD WIDTH=200 ALIGN=RIGHT VALIGN=MIDDLE>

		<FONT SIZE=2 COLOR=#000000 FACE="Verdana,Arial,Helvetica">

		<B><?= $caption ?></B>&nbsp;

		</TD>

	<TD WIDTH=250 ALIGN=LEFT VALIGN=MIDDLE>

		<SELECT NAME="data_<?= $FieldName?>">

		<? for ($cnum=$start_num; $cnum<=$end_num; $cnum++) { ?>

			<OPTION VALUE="<?= $cnum ?>" <? if ($fillinfo) if ($rs[$FieldName] == $cnum) echo "SELECTED" ?>><?= $cnum ?></OPTION>

		<? } ?>

		</SELECT>

		</TD>

</TR>

<?

}



function MakeEnumMenu($caption, $FieldName, $MenuArray)

{

	global $fillinfo;

	global $rs;

?>

<TR>

	<TD WIDTH=200 ALIGN=RIGHT VALIGN=MIDDLE>

		<FONT SIZE=2 COLOR=#000000 FACE="Verdana,Arial,Helvetica">

		<B><?= $caption ?></B>&nbsp;

		</TD>

	<TD WIDTH=250 ALIGN=LEFT VALIGN=MIDDLE>

		<SELECT NAME="data_<?= $FieldName ?>">

		<? foreach ($MenuArray as $k => $v) { ?>

			<OPTION VALUE="<?= $k ?>" <? if ($fillinfo) if ($rs[$FieldName] == $k) echo "SELECTED" ?>><?= $v ?></OPTION>

		<? } ?>

		</SELECT>

		</TD>

</TR>

<?

}



function MakeDate($caption, $FieldName, $maxlen)

{

	global $fillinfo;

	global $rs;

?>

<TR>

	<TD WIDTH=200 ALIGN=RIGHT VALIGN=MIDDLE>

		<FONT SIZE=2 COLOR=#000000 FACE="Verdana,Arial,Helvetica">

		<B><?= $caption?></B>&nbsp;

		</TD>

	<TD WIDTH=250 ALIGN=LEFT VALIGN=MIDDLE>

		<INPUT TYPE=TEXT NAME="datad<?= $FieldName?>" SIZE=10 MAXLENGTH=<?= $maxlen ?> VALUE="<? if ($fillinfo) echo date("m/d/Y", $rs[$FieldName]) ?>">

		</TD>

</TR>

<?

}



function MakeTextArea($caption, $FieldName)

{

	global $fillinfo;

	global $rs;

?>

<TR>

	<TD WIDTH=200 ALIGN=RIGHT VALIGN=MIDDLE>

		<FONT SIZE=2 COLOR=#000000 FACE="Verdana,Arial,Helvetica">

		<B><?= $caption?></B>&nbsp;

		</TD>

	<TD WIDTH=250 ALIGN=LEFT VALIGN=MIDDLE>

		</TD>

</TR>

<TR>

	<TD WIDTH=450 COLSPAN=2 ALIGN=CENTER VALIGN=MIDDLE>

		<TEXTAREA COLS=45 ROWS=10 NAME="dataq<?= $FieldName?>" wrap=soft><? if ($fillinfo) echo $rs[$FieldName] ?></TEXTAREA>

		</TD>

</TR>

<?

}

?>