<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MessageController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$result=collect();
		$message=collect();
		$id = Auth::user()->id;
		// $result = DB::select( DB::raw("SELECT messages,created_at from message where users_id ='$id' "));
		$inbox = DB::select('select created_at from message where users_id = ?', [$id]);
		foreach ($inbox as $key) {
			$result[] = $key->created_at;
		}

		$map = count($result);
		for ($i=0; $i < $map ; $i++) { 
			$new = $result[$i];
			if((time()-(60*60*24)) > strtotime($new)){
				$message[$i]=$result[$i];
			}
		}
		return view('inbox',compact('message'));
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
