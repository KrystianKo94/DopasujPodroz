<?php

namespace Config;

// Create a new instance of our RouteCollection class.


$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
//$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);
$routes->addPlaceholder('uuid', '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}');




/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->post('/register','RegisterController::saveUser');
$routes->get('/activation/(:uuid)','RegisterController::activation/$1');
$routes->get('/', 'MainController::index');
$routes->get('/login','UserController::index');
$routes->post('/sendlink','UserController::sendlink');
$routes->get('/sendlinkview', 'UserController::sendlinkview');
$routes->get('/password','ForgotPassowrdController::index');
$routes->get('/register','RegisterController::index');
$routes->get('/info','InformationController::index');
$routes->get('/password2','PasswordController::index');
$routes->post('/password/change/','PasswordController::passwordreset');
$routes->get('/userpassview/(:any)','PasswordController::userpasswordview/$1');
$routes->get('/advertisement/(:num)/detail','AnnouncementController::index/$1');
$routes->post('/login','UserController::approveUser',['filter'=>'userIsNotLogged']);
$routes->get('login','UserController::index',);
$routes->get('/logout','UserController::logout',);
$routes->post('/find/places','GeoLocationController::findLocationByText');
$routes->post('/filter/reservationByLocation','AnnouncementController::filterData');


$routes->group('/admin',['filter'=>'userIsLogged'], function($routes)
{
     $routes->post('tripinfo','LocationController::tripinformation');



    $routes->get('car/details/(:num)','JourneyController::ModifyTripDetails/$1');
    $routes->post('edit/trip/details','JourneyController::EditDetailsDataTrip');

   // $routes->post('advertisement','JourneyController::checkAdvertisement');
});

$routes ->group('/user',['filter'=>'userIsLogged'], function($routes)
{
    $routes->get('','MainAdminController::index');
    $routes->get('password','UserController::changePassword');
    $routes->post('password','ForgotPassowrdController::changepass');
    $routes->get('put', 'UserController::editpersonaldata');
    $routes->post('put', 'UserController::addpersonaldata');
    $routes->post('account', 'UserController::getRemoveAccount');
    $routes->get('account', 'UserController::removeUser');

    $routes->group('vehicle', function($routes)
    {
        $routes->get('', 'VehicleController::index');
        $routes->get('add', 'VehicleController::addCarGet');
        $routes->post('add','VehicleController::addCar');
        $routes->get('put', 'VehicleController::editCarGet');
        $routes->post('put', 'VehicleController::updateVehicle');
        $routes->get('(:num)', 'VehicleController::getCar/$1');
        $routes->post('remove','VehicleController::removeCar');
        $routes->get('',"CarController::index");
    });
    $routes->group('journey', function($routes)
    {
        $routes->get('','JourneyController::list');
        $routes->get('archive','JourneyController::listArchive');
        $routes->get('add','JourneyController::addGet');
        $routes->post('add','JourneyController::addadvertisement');
        $routes->get('put','JourneyController::editJourneys');
        $routes->post('put','JourneyController::changeTripStatus');
        $routes->post('vehicle/put/(:num)','JourneyController::ModifyTripDetails/$1');
        $routes->post('post','JourneyController::EditDetailsDataTrip');
        $routes->post('search','JourneyController::tripDetails');
        $routes->post('search_with_lat_lang','JourneyController::getDetailAdvertisementWithLocation');

    });
    $routes->group('location', function($routes)
    {
        $routes->post('district','LocationController::listDistrict');
        $routes->post('community','LocationController::listCommunities');
        $routes->post('places','LocationController::listPlaces');
        $routes->post('street','LocationController::listStreet');
        $routes->post('journey/information','LocationController::tripinformation');
        $routes->post('postcode', 'GeoLocationController::getPostCode');
        $routes->post('latlong', 'GeoLocationController::getLatLong');
    });
    $routes->group('driver', function($routes)
    {
        $routes->get('', 'DriverController::index');
        $routes->post('add', 'DriverController::adddriver');
    });
    $routes->group('opinion', function($routes)
    {
        $routes->get('aboutme',"OpinionController::index");
        $routes->get('', 'OpinionController::getMyOpinion');
        $routes->get('add', 'OpinionController::addOpinion');
    });

    $routes->group('reservation', function($routes)
    {
        $routes->get('', 'ReservationController::listReservation');
        $routes->get('driver', 'ReservationController::listReservationDriver');
        $routes->post('add', 'ReservationController::addReservation');
    });

    $routes->group('message', function($routes)
    {
        $routes->get('', 'MessageController::index');
        $routes->post('add', 'MessageController::addMessage');
        $routes->post('show/(:num)', 'MessageController::showGenerallyMessages/$1');
        $routes->post('show/(:num)/advertisements/(:num)', 'MessageController::showSpecificMessages/$1/$2');
    });

});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
