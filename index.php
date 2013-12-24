<?php 
if(isset($_POST['sub_data'])) {
	echo md5($_POST['dataa']);
}
?>
<html>
<body>
<form name="data_sub" target="" method="POST">
<input type="text" name="dataa" size="30">
<input type="submit" name="sub_data" value="convert">

</form>
</body>
</html>