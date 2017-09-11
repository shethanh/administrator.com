<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'desktop';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//$route['admin']='backend/login';





//****** Example Page *********//
//desktop/tours/siem-reap-tour/
$route['car.html']='desktop/utilities/car/';
$route['mobiles.html']='desktop/utilities/mobiles/';
$route['electronic.html']='desktop/utilities/electronic/';
$route['book.html']='desktop/utilities/book/';
$route['pet.html']='desktop/utilities/pet/';
$route['kid.html']='desktop/utilities/kid/';
$route['furniture.html']='desktop/utilities/furniture/';
$route['fashion.html']='desktop/utilities/fashion/';
$route['bike.html']='desktop/utilities/bike/';
$route['real-eastate.html']='desktop/utilities/real-eastate/';
$route['service.html']='desktop/utilities/service/';
$route['job.html']='desktop/utilities/job/';


/*$route['royal-palace-phnom-penh.html']='desktop/detail/royal-palace-phnom-penh';
*/
 

$route['detail.html/(.+)$'] = 'desktop/detail/$1';


//link-page-detail//
$route['gallery.html/(.+)$'] = 'desktop/gallery/$1';
$route['rooms-and-rates-for-hotel-siem-reap-cambodia.html'] = 'c_room/index';
$route['rooms.html/(.+)$'] = 'c_room/index/$1';
$route['nirvana.html'] = 'c_room/nirvana';
$route['nirvana.html/(.+)$'] = 'c_room/nirvana/$1';
$route['contact-the-hotel-in-siem-reap-cambodia.html'] = 'c_page/contactUs';





//For pages those have a static name
$route['{default_controller}/{default_method}/about.html'] = "{original_controller}/{original_method}";
 
//rule to rout request with number values
$route['{default_controller}/{default_method}/(:num)'] = "{original_controller}/{original_method}/$1";
 
//rule to rout request with regular expression values
$route['{default_controller}/{default_method}/([a-z]+)-{delimiter}'] = "{original_controller}/{original_method}/$1";