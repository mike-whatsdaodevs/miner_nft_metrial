<?php

for($i = 0; $i < 3; $i ++ ) {
	$metadata = 
		'{"name": "Meta-Intel Pentium #'.$i.'","image": "", "attributes": [{"trait_type": "Version", "value": "M-1"}, {"trait_type": "Hashrate", "value": "100"}, {"trait_type": "Consumption", "value": "10"}]}';
	$file = "./". $i;
	file_put_contents($file, $metadata);

}
