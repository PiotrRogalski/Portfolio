<?php

	function getTime() {
		$time = new DateTime();
		return $time;
	}

	function now() {
		$now = getTime();
		return $now->format('Y-m-d H:i:s');
	}

	function getPremiumDays($endDate) {
		$endDate = DateTime::createFromFormat('Y-m-d H:i:s',$endDate);
	 	$diff = getTime()->diff($endDate);
		return $diff->format('%y lat, %m mies, %d dni, %h godz, %i min, %s sek');
	}

	function premiumIsActive($endDate) {
		$message = 'Not recognized';
		$endDate = DateTime::createFromFormat('Y-m-d H:i:s',$endDate);
	 	if (getTime()<$endDate) {
	 		$message = '';
	 	}else{
	 		$message = 'nie';
	 	}
	 	return $message;
	}