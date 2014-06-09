<?php
class tormahiri{
function display($result){


	while($row=$result->fetchObject()){

		echo $row->content."</br>";
	}
}

function hi($s){


	echo $s."nig progorammisi";
}
}

?>