<?php

function debug($arr) {

	echo '<pre>' .print_r($arr, true). '</pre>';

}

function redirect($http = false) {
	if($http) {
		$redirect = $http;
	} else {
		$redirect = isset($_SERVER['HTTP_REFERRER']) ? $_SERVER['HTTP_REFERRER'] : PATH;
	}

	header("Location: $redirect");
	exit;
}