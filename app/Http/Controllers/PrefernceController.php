<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
class PrefernceController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $events = DB::select( DB::raw("SELECT * from event_folders where name ='$id'"));
		
		// return view('single',compact('events'));
		$db = Auth::user()->id;
		$events = DB::select( DB::raw("SELECT message from event_folders where name ='$db'"));

		echo $db;
		// return Session::get('user');
	       // return Session::get('id');
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$events = DB::select( DB::raw("SELECT * from event_folders where name ='$id'"));
		
		return view('single',compact('events'));

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
