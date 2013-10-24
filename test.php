<?php

/**
**	rand(minx, max, urandom_byte)
**
**	min: minimum value
**	max: maximum value
**	urandom_byte: it is a switch to the urandom cryptographically secure random byte source. If it is 0, default
**				  rand function is switched to otherwise urandom_byte defines how many random byte will be read from
**					urandom.
**/

$byte_size = 4;

//reason of 256 cycles is 256 * 4 = 1024byte data would be sufficient for test.

echo "\n\nReading $byte_size byte per cycle from urandom\n\n";
for($i=1; $i<=256; $i++){ 
	echo rand(0,getrandmax(),$byte_size)." "; //reading 4 byte to match with default rand output size
	if($i%10 == 0) echo "\n";
}

echo "\n\nReading from default rand function\n\n";
for($i=1; $i<=256; $i++){
	echo rand(0,getrandmax(),0)." ";
	if($i%10 == 0) echo "\n";
}
?>
