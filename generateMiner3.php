<?php

for($i = 1; $i < 3; $i ++ ) {
	$metadata = 
		'{
    "name": "Zeon GT-100X #'. $i .'",
    "description": "BitcoinCode series miner",
    "image": "https://api.bitcoincode.technology/nft/images/ZeonGT-100X.png",
    "image_4K": "https://api.bitcoincode.technology/nft/images/ZeonGT-100X.png",
    "attributes": {
        "Version": "GT-100X",
        "HashPower": "100 KW",
        "HashFee": "1,000"
        "Consumption": "0.278 bfuel/s"
    }
}';
	$file = "./". $i ;
	file_put_contents($file, $metadata);

}