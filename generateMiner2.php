<?php

for($i = 1; $i < 3; $i ++ ) {
	$metadata = 
		'{
    "name": "Zeon GT-10X #'. $i .'",
    "description": "BitcoinCode series miner",
    "image": "https://api.meta-btc.org/nft/images/metaintelp4.png",
    "image_4K": "https://api.meta-btc.org/nft/images/metaintelp4_hd.png",
    "attributes": {
        "Version": "GT-10X",
        "HashPower": "10 KW",
        "HashFee": "100",
        "Consumption": "0.0278 bfuel/s"
    }
}';
	$file = "./". $i ;
	file_put_contents($file, $metadata);

}
