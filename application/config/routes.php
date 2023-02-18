<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'dashboard';
$route['404_override'] = 'ErrorController/index';
$route['translate_uri_dashes'] = FALSE;

//Dashboard
$route['dashboard'] = 'Dashboard/index';

// List Klub Sepak Bola
$route['listklub'] = 'ListKlub/index';
$route['editklub'] = 'ListKlub/ajax_edit';
