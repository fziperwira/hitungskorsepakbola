<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'dashboard';
$route['404_override'] = 'ErrorController/index';
$route['translate_uri_dashes'] = FALSE;
