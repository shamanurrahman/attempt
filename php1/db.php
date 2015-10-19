<?php 
	
	include 'contactDb.php';
	
	$cdb = new ContactBD;
	
	$cdb->insertIntoCDB("Variable","Programming","v@v.com","NA");
	$cdb->selectAll();
	
	$cdb->close();

?>