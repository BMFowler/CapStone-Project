<?php namespace App\Http\Controllers;

class UserController extends Controller {

/*
|--------------------------------------------------------------------------
| User Controller
|--------------------------------------------------------------------------
|
| This controller renders your application's "dashboard" for users that
| are authenticated. Of course, you are free to change or remove the
| controller as you wish. It is just here to get your app started!
|
*/

/**
* Create a new controller instance.
*
*/
public function __construct()
{
//$this->middleware('auth');
}

/**
* Show the application dashboard to the user.
*
* @return Response
*/
public function index()
{
return view('user');
}


/**
* Show the application dashboard to the user.
*
* @return Response
*/
public function user()
{
return view('users.Profile');
}
}