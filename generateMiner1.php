<?php

for($i = 1; $i < 3; $i ++ ) {
	$metadata = 
		'{
    "name": "Zeon GT-1X #'. $i .'",
    "description": "BitcoinCode series miner",
    "image": "https://api.meta-btc.org/nft/images/metaintelp4.png",
    "image_4K": "https://api.meta-btc.org/nft/images/metaintelp4_hd.png",
    "attributes": {
        "Version": "GT-1X",
        "HashPower": "1 KW",
        "HashFee": "10",
        "Consumption": "0.00278 bfuel/s"
    }
}';
	$file = "./". $i ;
	file_put_contents($file, $metadata);

}
