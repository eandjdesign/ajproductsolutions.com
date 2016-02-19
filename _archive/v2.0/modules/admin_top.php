<HTML>

<HEAD><TITLE>Control Panel</TITLE><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</HEAD>



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



<body bgcolor="#FFFFFF" background="../images/bgfade2.gif" link="#336666" vlink="#669999" alink="#339999" onLoad="MM_preloadImages('images/about_on.gif','images/services_on.gif','images/upload_on.gif')">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div id="Layer1" style="position:absolute; left:0; top:0; width:790px; height:143px; z-index:1"> 
  <table width="900" border="0" cellspacing="0" cellpadding="0">
    <tr valign="top"> 
      <td width="19%"><p><img src="../images/logo3_01.gif" width="162" height="68" align="top"></p>
        <table width="100%" border="0" cellspacing="0" cellpadding="15">
          <tr> 
            <td align="left"><font face="Arial, Helvetica, sans-serif"><font color="#003399" face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font color="#6699CC"><strong><a href="../index.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('home','','../images/home_on.gif',1)"><img src="../images/home_off.gif" alt="home" name="home" width="93" height="29" border="0"></a><a href="services.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Services','','images/services_on.gif',1)"><br>
              </a><a href="../about.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('about','','../images/about_on.gif',1)"><img src="../images/about_off.gif" alt="about" name="about" width="59" height="29" border="0"></a><a href="services.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Services','','images/services_on.gif',1)"> 
              <br>
              </a><a href="../services.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('services','','../images/services_on.gif',1)"><img src="../images/services_off.gif" alt="services" name="services" width="74" height="29" border="0"></a><a href="services.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Services','','images/services_on.gif',1)"> 
              <br>
              </a></strong></font></font></font></font></td>
          </tr>
        </table></td>
      <td width="41%" height="227"><img src="../images/logo3_02.gif" width="374" height="216" align="top"></td>
      <td width="40%" rowspan="2"><img src="../images/logo3_03.gif" width="364" height="296"></td>
    </tr>
    <tr> 
      <td height="78" colspan="2"> <table width="100%" border="0" cellpadding="15" cellspacing="0">
          <tr> 
            <td height="78" align="left"><font size="4"><b><font color="#6699CC" face="Arial, Helvetica, sans-serif"><img src="../images/upload.gif" width="115" height="48"></font></b></font></td>
          </tr>
        </table></td>
    </tr>
  </table>
</div>
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

