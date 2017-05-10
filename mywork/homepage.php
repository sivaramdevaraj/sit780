<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SIT780 Assignment 2 Homepage</title>
<link rel="stylesheet" type="text/css" href="css/common.css">
</head>

<body>
<table width="1000px" border="0" cellpadding="2" style="min-height:500px;height:500px;">
  <tr>
    <td bgcolor="#0099FF" style="width:220px;vertical-align:top;">
		<a class="lnk-menu" href="index.php" title="homepage">Home</a><br />

	<form name="frmLogin" method="post" action="index.php">
	<table width="100%" border="0" cellpadding="1">
	  <tr>
	  	<td>
			Username:
		</td>
		<td>
		  <input type="text" name="txtUsername" value="admin" />
		</td>
	  </tr>
	  <tr>
	  	<td>
			Password:
		</td>
		<td><input type="password" name="txtPassword" value="SIT780" /></td>
	  </tr>
	  <tr>
	  	<td>
			&nbsp;
		</td>
		<td><img src="php_captcha.php"></td>
	  </tr>
	  <tr>
	  	<td>
			captcha string
		</td>
		<td><input name="txtCaptcha" type="text"></td>
	  </tr>
	  <tr>
	  	<td>
			&nbsp;
		</td>
		<td><input name="btnLogin" type="submit" value="Login" /></td>
	  </tr>
	</table>
	</form>for guest access:<br> username/password is guest/SIT780	</td>
    <td valign="top">
<h1>Access limited</h1>
<p>This function is available for authorized users only.</p>
<p>You must log in first before using.</p>
	</td>
  </tr>
</table>
</body>
</html>