<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';

//$route['student'] = 'welcome/student';



$route['404_override'] = 'welcome';
$route['translate_uri_dashes'] = FALSE;
