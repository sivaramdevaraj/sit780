

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Delete a User</title>
		<link rel="stylesheet" type="text/css" href="css/common.css">
	</head>

	<body>
		<table width="1000px" border="0" cellpadding="2" style="min-height:500px;height:500px;">
		<tr>
			<td bgcolor="#0099FF" style="width:220px;vertical-align:top;">
					<a class="lnk-menu" href="index.php" title="homepage">Home</a><br />
Welcome, admin<br />
You are now logged in under <b><em>administrator</em></b> privilege<br />
<a class="lnk-menu" href="index.php?command=logout">Logout</a><br />
<a class="lnk-menu" href="add_staff.php" title="Add new staff">Add new staff</a><br/><a class="lnk-menu" href="add_user.php" title="Add new user"> Add new user </a><br/><a class="lnk-menu" href="delete_user.php" title="Delete a user"> Delete a user </a><br/><a class="lnk-menu" href="display_user.php" title="Display users"> Display all users </a><br/><a class="lnk-menu" href="display_staff.php" title="staff data">View staff members</a><br/>
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
	</form>			</td>
			<td valign="top">
				<h3>Delete a User</h3>
		
								
				<form action='' method='get'><table border='1'><tr> <td width='50'> </td> <td width='100'> <b> Username </b> </td> <td width='100'> <b> Password </b></td> <td width='100'><b> Privilege </b></td></tr><tr><td width='50'><input type='radio' name='delete' value='1'></td><td width='100'>admin</td><td width='100'>SIT780</td><td width='100'>administrator</td></tr><tr><td width='50'><input type='radio' name='delete' value='2'></td><td width='100'>guest</td><td width='100'>SIT780</td><td width='100'>normal</td></tr></table> <br/> <input type='submit' name='submit' value='Delete User'></form>				

			</td>
		</tr>
		</table>
	</body>
</html>