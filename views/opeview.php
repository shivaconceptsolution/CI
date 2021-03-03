<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="<?php echo site_url(); ?>/Operation/opelogic" method="post">
<input type="text" name="txtnum1" placeholder="Enter First Number"  value="<?php echo @$num1; ?>"	/><br><br>

<input type="text" name="txtnum2" placeholder="Enter Second Number" value="<?php echo @$num2; ?>" />  <br><br>

<input type="submit" name="btnadd" value="+" />
<br>
<input type="submit" name="btnsub" value="-" />
<br>
<input type="submit" name="btnmulti" value="*" />
<br>
<input type="submit" name="btndiv" value="/" />
</form>

<?php

echo @$key;

?>
</body>
</html>