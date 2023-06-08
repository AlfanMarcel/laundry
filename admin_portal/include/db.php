<?php
// database untuk data penyimpanan laundry bernama "laundry"
$db = new MYSQLi("localhost", "root", "", "laundry");
// kondisi konek database
if ($db->connect_error > 0) {
	die('Connection error');
} else {
	echo '';
};
