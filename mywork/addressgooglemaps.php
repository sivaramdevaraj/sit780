<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Staff map</title>
<link rel="stylesheet" type="text/css" href="css/common.css">

<!-- ABQIAAAA97ixhc6_IQJcQh1j3FZWJRT8DbTsAVO_KeAC2dlLQqDOeCpTcBSj__tZ68P0lnU_wbHttURpYqpvuQ -->

<script type="text/javascript" src="http://www.google.com/jsapi?key=ABQIAAAA5YS1lSfUCrqgOvhv686hThSq2eDh-BjO8CsNL7yPEFh9W4sCQxRPZHxjQUkmXkT5Fx47JKO4Fro9RQ"></script>

<script type="text/javascript">
	google.load("maps", "2");
	var map = null;
	var geocoder = null;
	function initialize()
	{
		map = new GMap2(document.getElementById("map_student"));
		geocoder = new GClientGeocoder();
		var address = "11 Hamel St, Box Hill South, VIC 3128, Australia";
		//var address="Flinders Street, Melbourne, Victoria, Australia";
		if (geocoder)
		{
			geocoder.getLatLng(
			address,
			function(point)
			{
				if (!point)
				{
					alert(address + " not found");
				}
				else 
				{
					map.setCenter(point, 13);
					var marker = new GMarker(point);
					map.addOverlay(marker);
					marker.openInfoWindowHtml(address);
				}
			}
		);
		}
	}
	google.setOnLoadCallback(initialize);
</script>
</head>

<body>
<table width="1000px" border="0" cellpadding="2" style="min-height:500px;height:500px;">
  <tr>
    <td bgcolor="#0099FF" style="width:220px;vertical-align:top;">
		<a class="lnk-menu" href="index.php" title="homepage">Home</a><br />
Welcome, guest<br />
You are now logged in under <b><em>normal</em></b> privilege<br />
<a class="lnk-menu" href="index.php?command=logout">Logout</a><br />
<a class="lnk-menu" href="display_staff.php" title="staff data">View staff members</a><br/>
	<form action="index.php" method="post" name="frmSearch" class="search-form">
		<span class="search_label">Search Staff</span>
		<br />
		<table width="100%" border="0" cellpadding="1">
		  <tr>
			<td>Given Name: </td><td><input name="txtFirstnameSearch" type="text" /></td>
		  </tr>
		  <tr>
			<td>Surname: </td><td><input name="txtLastnameSearch" type="text" /> </td>
		  </tr>
		  <tr>
			<td align="right" colspan="2"><input name="btnSubmit" type="submit" value="Search" /></td>
		  </tr>
		</table>
	</form>	</td>
    <td valign="top">
		<div id="map_student" style="width:500px;height:300px;"></div>
	</td>
  </tr>
</table>
	
</body>
</html>