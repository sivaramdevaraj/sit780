<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SIT780 assignment 2 homepage</title>
<link rel="stylesheet" type="text/css" href="css/common.css">
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
<h1> Welcome guest! </h1> 
<h3> You are logged in as a(n) <em>normal</em> user. </h3>
<h3> All available functions for you are on the left side of this window.

<br/><br/><table width="90%" cellspacing="1" cellpadding="2" border="0" bgcolor="#FFFFFF" class="student-list">
	<tr>
 <th> Staff_ID </th> 
<th> Surname </th> 
<th> Given Name </th> 
		<th>Address</th>
	</tr>
	<tr>
		<td>80026727 (<a href="mailto:j.smith@yahoo.co.uk">j.smith@yahoo.co.uk</a>)</td>
		<td>Smith</td>
		<td>James</td>
		<td><a href="staff_map.php?staffID=80026727" title="see James's address on Google Map">11 Hamel St, Box Hill South, VIC 3128, Australia</a></td>
	</tr>
	<tr>
		<td>36783454 (<a href="mailto:jane.lanham@deakin.edu.au">jane.lanham@deakin.edu.au</a>)</td>
		<td>Lanham</td>
		<td>Jane</td>
		<td><a href="staff_map.php?staffID=36783454" title="see Jane's address on Google Map">221 Burwood Highway, Burwood, VIC 3125, Australia</a></td>
	</tr>
	<tr>
		<td>80047345 (<a href="mailto:amyr@gmail.com">amyr@gmail.com</a>)</td>
		<td>Ron</td>
		<td>Amy</td>
		<td><a href="staff_map.php?staffID=80047345" title="see Amy's address on Google Map">23 Hawthorn Rd, Penrith, NSW, Australia</a></td>
	</tr>
	<tr>
		<td>80053478 (<a href="mailto:rfisher@yahoo.com">rfisher@yahoo.com</a>)</td>
		<td>Fisher</td>
		<td>Richard</td>
		<td><a href="staff_map.php?staffID=80053478" title="see Richard's address on Google Map">188 Canterbury Rd, Rochester, NY 14607, USA</a></td>
	</tr>
	<tr>
		<td>1234 (<a href="mailto:student@deakin.edu.au">student@deakin.edu.au</a>)</td>
		<td>deakin</td>
		<td>student</td>
		<td><a href="staff_map.php?staffID=1234" title="see student's address on Google Map">burwood</a></td>
	</tr>
	<tr>
		<td>1111 (<a href="mailto:abc@gmail.com">abc@gmail.com</a>)</td>
		<td>xyz</td>
		<td>abc</td>
		<td><a href="staff_map.php?staffID=1111" title="see abc's address on Google Map">boxhill, melbourne</a></td>
	</tr>
	<tr>
		<td>j.smith@yahoo.co.uk (<a href="mailto:j.smith@yahoo.co.uk">j.smith@yahoo.co.uk</a>)</td>
		<td>smith</td>
		<td>smith</td>
		<td><a href="staff_map.php?staffID=j.smith@yahoo.co.uk" title="see smith's address on Google Map">smith</a></td>
	</tr>
	<tr>
		<td>80026727  (<a href="mailto:deakin@deakin.com">deakin@deakin.com</a>)</td>
		<td>deakin</td>
		<td>deakin</td>
		<td><a href="staff_map.php?staffID=80026727 " title="see deakin's address on Google Map">deakin</a></td>
	</tr>
	<tr>
		<td>123 (<a href="mailto:s.Gmail">s.Gmail</a>)</td>
		<td>Huda</td>
		<td>Nisha</td>
		<td><a href="staff_map.php?staffID=123" title="see Nisha's address on Google Map">2 Alkira Court</a></td>
	</tr>
	<tr>
		<td>1 (<a href="mailto:test@gmail.com">test@gmail.com</a>)</td>
		<td>Tommy</td>
		<td>Robert</td>
		<td><a href="staff_map.php?staffID=1" title="see Robert's address on Google Map">123 est street, jkkd 3000</a></td>
	</tr>
	<tr>
		<td>1 (<a href="mailto:sdfsd">sdfsd</a>)</td>
		<td>sdfs</td>
		<td>sdfsdf</td>
		<td><a href="staff_map.php?staffID=1" title="see sdfsdf's address on Google Map">sdfsdf</a></td>
	</tr>
</table>
	</td>
  </tr>
</table>
</body>
</html>