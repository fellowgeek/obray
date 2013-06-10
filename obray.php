<?php
	
	/*****************************************************************************

	The MIT License (MIT)
	
	Copyright (c) 2013 Nathan A Obray <nathanobray@gmail.com>
	
	Permission is hereby granted, free of charge, to any person obtaining a copy
	of this software and associated documentation files (the "Software"), to deal
	in the Software without restriction, including without limitation the rights
	to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
	copies of the Software, and to permit persons to whom the Software is
	furnished to do so, subject to the following conditions:
	
	The above copyright notice and this permission notice shall be included in
	all copies or substantial portions of the Software.
	
	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
	IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
	FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
	AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
	LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
	OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
	THE SOFTWARE.
	
	*****************************************************************************/


	// enable debugging
	error_reporting(E_ALL);									   // Set error reporting to display all errors and types
	ini_set('display_errors', true); 						   // PHP configuration set display errors to true
	
	session_set_cookie_params(0);
	session_start();												// Starts a session in PHP
	
	define('_SELF_', dirname(__FILE__).'/');                   // The should contain the path to your application
	require_once '../core/ORouter.php';                        // include ORouter
	$router = new ORouter();                                   // instatiate ORouter
	$router->route($_SERVER["REQUEST_URI"]);                   // call ORouter's "route" function
			
?>