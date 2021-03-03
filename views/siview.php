<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="<?php echo site_url(); ?>/SIController/silogic">

<input type="text" name="txtp" placeholder="Enter P" value="<?php echo @$p; ?>"  />
<br>
<br>
<input type="text" name="txtr" placeholder="Enter R" value="<?php  if(isset($r)) { echo $r;  } ?>" />
<br>
<br>
<input type="text" name="txtt" placeholder="Enter T" value="<?php echo @$t; ?>" />
<br>
<br>
<input type="submit" name="btnsubmit" value="Calculate" />

</form>

<br>

<?php

echo @$res;

?>
</body>
</html>