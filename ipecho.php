<?php
function IPEcho() {
	$url = 'https://ipecho.net/plain';
	$ch = curl_init();
	$timeout = 5;

	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

	$ddns_ip = curl_exec( $ch );
	curl_close ( $ch );
	
	return $ddns_ip;
}

echo IPEcho();