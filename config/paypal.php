<?php
return [ 
    'client_id' => 'AS-RupLShh6TSZsFDI0zfqtGNx_LFSnQs7oD8BTB6mOCyqp4-i1NLukR7uQTaw4qlPElRyluYFbiM8b2',
	'secret' => 'ED3w3vTqCPC2bn1kFLxZrp_wC93DdTMo12Ww0Bedt2uEPrDxlqFKjEOucZVGq_iEmXe819nDa3ETbutW',
    'settings' => array(
        'mode' => 'sandbox',
        'http.ConnectionTimeOut' => 1000,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'FINE'
    ),
];