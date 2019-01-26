<?php

return array(
'name' => _wp('Confirm contact'),
'description' => _wp('Confirm contact manually by sending confirmation link from contact profile'),
'version' => '1.0',
'handlers' => array(
    'backend_contact_info' => 'backendContactInfo',
    'backend_assets' => 'backendAssets',
),

'img'=>'img/plugin.png',
);
