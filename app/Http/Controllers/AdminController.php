<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show index page
	 * @return Response
	 */
    public function index()
    {
    	return view('admin.index');
    }
}
