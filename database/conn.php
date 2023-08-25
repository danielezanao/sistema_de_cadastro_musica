<?php

include_once 'config.inc.php';

function conectar()
{
		$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);
		return $conn;
}
