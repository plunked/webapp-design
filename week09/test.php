<DOCTYPE = html>
<html lang="en">
<head>
<title>TEST</title>
</head>
<body>
<form method=post action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type=hidden name=in_name value="<?php echo $in_value; ?>” >
<input type=submit name=submit value=”Input Label">
<input type=reset name=reset value="reset">
</form>
</body>
</html>