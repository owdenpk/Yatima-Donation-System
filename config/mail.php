<?php 
return [
'driver' => env('MAIL_DRIVER', 'smtp'),
'host' => env('MAIL_HOST', 'owden.kimaro@riarauniversity.ac.ke'),
'port' => env('MAIL_PORT', 587),
'from' => ['address' => 'owden.kimaro@riarauniversity.ac.ke', 'name' => 'Yatima Donation'],
'encryption' => env('MAIL_ENCRYPTION', 'tls'),
'username' => env('MAIL_USERNAME'),
'password' => env('MAIL_PASSWORD'),
'sendmail' => '/usr/sbin/sendmail -bs',
'pretend' => false,

];