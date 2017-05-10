<?php 
include('session_info.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Guest Welcome Page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	 <div class="container">
	 	<div class="row">
	 		<h2> Welcome to Homepage </h2>
	 	</div>
	 	<table width="1000px" border="0" cellpadding="2" style="min-height:500px;height:500px;">
  			<tr>
    			<td bgcolor="#0099FF" style="width:250px; vertical-align:top; height: 500px;">
					<a class="lnk-menu" href="index.php" title="homepage">Home</a><br />
					Welcome, Guest<br />
					You are now logged in under <b><em>Normal</em></b> privilege<br />
					<a class="lnk-menu" href="index.php?command=logout">Logout</a><br />
					<a class="lnk-menu" href="staff_info.php" title="staff data">View staff members</a><br/>
					<form action="index.php" method="post" name="frmSearch" class="search-form">
					<span class="search_label">Search Staff</span>
					<br />
				<table width="100%" border="0" cellpadding="1" >
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
		</form>
	</td>
    		<td valign="top">
				<h1> Welcome Guest! </h1> 
				<h4> You are logged in as a(n) <em>Normal</em> user. </h4>
				<h4> All available functions for you are on the left side of this window.</h4>
	 	<div class="row">
	 	<br/><br/><table width="100%" cellspacing="1" cellpadding="2" border="0" bgcolor="#FFFFFF" class="student-list">
	<tr>
		<th> Sl.No </th>
 		<th> Staff_ID </th> 
		<th> First Name </th> 
		<th> Last Name </th>
		<th> eMail Id </th> 
		<th> Address</th>
	</tr>
	 	</div>
	 </div>
</body>
</html>