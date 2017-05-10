<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Add new staff</title>
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
	</form>				</td>
				<td valign="top">
					<h3>Add a new Staff</h3>	
										
					<form action="" method="post" name="frmAdd">
						<table width="400" border="0" cellpadding="1">
							<tr>
								<td>Staff ID </td>
								<td><input name="txtID" type="text" style="width:250px;" /></td>
							</tr>
							<tr>
								<td>Email</td>
								<td><input name="txtEmail" type="text" style="width:250px;" /></td>
							</tr>
							<tr>
								<td>Given Name </td>
								<td><input name="txtFirstname" type="text" id="txtFirstname" style="width:250px;" /></td>
							</tr>
							<tr>
								<td>Surname </td>
								<td><input name="txtLastname" type="text" id="txtLastname" style="width:250px;" /></td>
							</tr>
							<tr>
								<td>Address</td>
								<td><input name="txtAddress" type="text" id="txtAddress" style="width:250px;" /></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td><input type="submit" name="Submit" value="Add Staff" /></td>
							</tr>
						</table>
		
					</form>

				</td>
			</tr>
		</table>
	</body>
</html>
