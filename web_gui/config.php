<?php
	//ip of the airconditioner
	
	$ip="192.168.1.11";
	function returnAirconIP(){
		return $ip;
	}
	if(isset($_GET['returnAirconIP']){
        	die(returnAirconIP);
	}
?>
