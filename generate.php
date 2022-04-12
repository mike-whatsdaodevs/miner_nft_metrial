<?php

for($i = 1; $i < 3; $i ++ ) {
	$metadata = 
		'{
    "name": "Meta-Intel Pentium 4 #'. $i .'",
    "description": "MBTC M-1 series miner",
    "image": "https://api.meta-btc.org/nft/images/metaintelp4.png",
    "image_4K": "https://api.meta-btc.org/nft/images/metaintelp4_hd.png",
    "attributes": {
        "Version": "M-1",
        "Hashrate": "100",
        "Consumption": "10"
    }
}';
	$file = "./". $i ;
	file_put_contents($file, $metadata);

}
