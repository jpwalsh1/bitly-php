<?php

function create_bitly_url($url)
	{
		// Form the Bitly api call URL
		$bitly = 'http://api.bitly.com/v3/shorten?login=[bitly login name]&apiKey=[enter api key]' . '&longUrl=' . urlencode($url) . '&format=json';
	
		// Fetch Bitly URL
		$response = file_get_contents($bitly);
		
		$json = @json_decode($response,true);
		return $json['data']['url'];
	}
	
?>