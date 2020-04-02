<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Custom Routes
$route['admin']  = 'Admin/overview';
$route['kasir']  = 'Kasir/overview';
$route['waiter'] = 'Waiter/overview';
