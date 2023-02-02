<?php
session_start();
if (empty($_SESSION['messages'])) {
	return;
}

$messages = $_SESSION['messages'];
unset($_SESSION['messages']);

 foreach ($messages as $message){
 	echo "<ul><li> " .$message. "</li></ul>"; 

 } 
	 
?>
