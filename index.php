<style type="text/css">
	

	*{

		margin:0 auto;
		width: 600px;

	}
</style>
<?php
include"query.php";
$cls=new tormahiri();

$db = new PDO('sqlite:tormahiri.db');
$sql="select * from agent";
$res=$db->query($sql);
$cls->display($res);
$cls->hi("tormahiri")

?>