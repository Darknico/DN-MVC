<?php if (!defined("DN-MVC")) {
    die("Hacking...");
}
?>
<h1>
	TEST DB
</h1>

<table>
	<?php
		echo'<tr><td colspan="3">as array</td></tr>';
		foreach ($dbArray as $row) {
			// If use dbResultArray
			echo '<tr><td>' . $row["Id"] . '</td><td>' . $row["Value1"] . '</td><td>' . $row["value3"] . '</td></tr>';
		}
		echo '<tr><td colspan="3">count array'. $dbRowCount . '</td></tr>';
		
		echo '<tr><td colspan="3">--------</td></tr>';
		
		echo '<tr><td colspan="3">as object</td></tr>';
		foreach ($dbObject as $row) {
			// If use dbResultObject
			echo '<tr><td>' . $row->Id . '</td><td>' . $row->Value1 . '</td><td>' . $row->value3 . '</td></tr>';
		}
		echo '<tr><td colspan="3">count object' . $dbRowCount . '</td></tr>';


?>
</table>
