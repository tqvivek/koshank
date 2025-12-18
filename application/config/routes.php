<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['about'] = "welcome/about";
$route['portfolio'] = "welcome/portfolio";
$route['services'] = "welcome/services";
$route['blogs'] = "welcome/blogs";
$route['connect'] = "welcome/connect";
$route['404'] = "welcome/404";
$route['cancellation-and-refund'] = "welcome/cancellation_and_refund";
$route['digital-marketing-course'] = "welcome/digital_marketing_course";
$route['digital-marketing-tools'] = "welcome/digital-marketing_tools";
$route['digital-marketing-trends-in-2023'] = "welcome/digital_marketing_trends_in_2023";
$route['impact-of-ai-on-performance-marketing'] = "welcome/impact_of_ai_on_performance_marketing";
$route['meet-koshank'] = "welcome/meet_koshank";
$route['personalization-in-performance-marketing'] = "welcome/personalization_in_performance_marketing";
$route['power-of-data-in-performance-marketing'] = "welcome/power_of_data_in_performance-marketing";
$route['privacy-policy'] = "welcome/privacy_policy";
$route['profile'] = "welcome/profile";
$route['shipping-and-delivery'] = "welcome/shipping_and_delivery";
$route['terms-and-conditions'] = "welcome/terms_and_conditions";
$route['thank-you'] = "welcome/thank_you";
$route['shankar-dange'] = "welcome/shankar_dange";
$route['vaishnavi-beldar'] = "welcome/vaishnavi_beldar";
$route['soham-kumthekar'] = "welcome/soham_kumthekar";
$route['prasanna-karmalkar'] = "welcome/prasanna_karmalkar";
$route['mail_template'] = "welcome/mail_template";




