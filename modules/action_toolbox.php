<?

/*

	Action Toolbox

	Copyright 2002 Cary Stanley

*/



function DeleteRec($Table, $KeyName, $Value)

{

	global $db;

	$sqlstr = "DELETE FROM " . $Table . " WHERE " . $KeyName . " = " . $Value . ";";

	if(!mysql_query($sqlstr, $db))

		echo $sqlstr."<BR>".mysql_errno().": ".mysql_error()."<BR>";

}



function EditRec($Table, $KeyName, $Value)

{

	global $db;

	$gs = "";

	foreach ($_POST as $x => $v)

	{

		if (substr($x, 0, 5) == "data_")

			$gs .= substr($x, 5) . " = " . $v . ",";

		if (substr($x, 0, 5) == "datad")

			$gs .= substr($x, 5) . " = " . strtotime ($v) . ",";

		if (substr($x, 0, 5) == "dataq")

			$gs .= substr($x, 5) . " = '" . $_POST[$x] . "',";

	}

	$gs = substr($gs, 0, -1);

	$sqlstr = "Update " . $Table . " Set " . $gs . " Where " . $KeyName . " = " . $Value . ";";

	if(!mysql_query($sqlstr, $db))

		echo $sqlstr."<BR>".mysql_errno().": ".mysql_error()."<BR>";

}



function AddRec($Table)

{

	global $db;

	$fs = "";

	foreach ($_POST as $x => $v)

	{

		if (substr($x, 0, 4) == "data")

			$fs .= substr($x, 5) . ",";

	}

	$ds = "";

	foreach ($_POST as $x => $v)

	{

		if (substr($x, 0, 5) == "data_")

			$ds .= $v . ",";

		if (substr($x, 0, 5) == "datad")

			$ds .= strtotime ($v) . ",";

		if (substr($x, 0, 5) == "dataq")

			$ds .= "'" . $v . "',";

	}

	$fs = substr($fs, 0, -1);

	$ds = substr($ds, 0, -1);

	$sqlstr = "INSERT INTO " . $Table . " (" . $fs . ") VALUES (" . $ds . ");";

	echo $sqlstr;

	if(!mysql_query($sqlstr, $db))

			echo $sqlstr."<BR>".mysql_errno().": ".mysql_error()."<BR>";

}



?>