<?php
header('Content-Type: application/json');
echo '{ ' . "\n";
for($i=1;$i<5;$i++) {
	$usb = exec('sudo /root/get.sh usb' . $i);
	$colors = explode(",",$usb);
	echo "\t" . '"usb'.$i.'" : { "color": "' . $colors[0] . ',' . $colors[1] . ',' . $colors[2] . '" }';
	if ($i<4) {
		echo ",\n";
	} else {
		echo "\n";
	}
}
echo '}' 
?>
