<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\DOMDocument;
class MapController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		 $locations = DB::table('markers')->get();
		 // $locations = DB::select( DB::raw("SELECT *,number_left,event_folders.name as eName FROM markers,event_folders WHERE identify = 'New Play' and event_folders.name='New Play'") );
    	return view('map',compact('locations'));
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
	 * @param  Request $reqest
	 * @return Response
	 */
	public function show(Request $request)
	{
		//
		// $dom = new \DOMDocument();
		// $node = $dom->createElement("markers");
		// $parnode = $dom->appendChild($node);

		// $users = DB::table('markers')->get();

		// header("Content-type: text/xml");

		// foreach ($users as $marker) {
		// 	 $node = $dom->createElement("marker");
  // 			 $newnode = $parnode->appendChild($node);
		// 	 $newnode->setAttribute("name",$marker->name);
		// 	 $newnode->setAttribute("address", $marker->address);
		// 	 $newnode->setAttribute("lat", $marker->lat);
		// 	 $newnode->setAttribute("lng", $marker->lng);
		// 	 $newnode->setAttribute("type", $marker->type);
		// }
		// echo $dom->saveXML();
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
