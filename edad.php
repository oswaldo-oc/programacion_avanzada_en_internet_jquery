<?php
	if (isset($_POST["year"])) {

		$edad = date("Y") - $_POST["year"];
		echo ($edad);
	}
?>