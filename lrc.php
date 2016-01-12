<?php
/**
 * Calculate LRC
 * 
 * Sum the byte values of all characters in a string and return the character representation of
 * the final value.
 * 
 * @author Eric Little
 * @param string	$string	Required Pre-Base64 Encoded string
 * @return string	Single character
 */
function lrc_byte($string) {
	$bytes = array_map(function($c) { return ord($c); }, str_split($string));		
	$byte = array_reduce($bytes, function($o, $i) { return $o ^= $i; });
	
	return chr($byte);
}//END lrc_byte
?>