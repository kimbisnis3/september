<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['panel'] = 'adm/landingpage';
$route['panel/(:any)'] = 'adm/$1';
