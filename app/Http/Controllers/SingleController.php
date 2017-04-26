<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controller\EventController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;
use App\EventFolder;
use App\QrCodes;
use DateTime;
class SingleController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response 
	 */
	public function index()
	{	
		//This is to redirect to a page named single.blade.php
		return view('single');
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
	 * This function recieves information after a user has made payment for a ticket
	 * All information is then recorded and sent into the database
	 * A QR code is generated using information about the event and the number of the user
	 *
	 * @param  Request $request
	 * @return Response
	 */
	public function show(Request $request)
	{
		//
		$input = new EventFolder;
		$QR = new QrCodes;

		$value = $request->session()->get('phoneNumber');
		$name = $request->get('eventName');
		$number = $request->get('quantity');
		$amount = $request->get('ticket');
		$phoneNumber = $request->get('phoneNumber');
		$totalAmount = $number * $amount;
		Session::put('key', $phoneNumber);
		$qr=$phoneNumber.$name;
		$now=new DateTime();

		$input->amountPaid=$totalAmount;
		$input->numberOfTickets=$number;
		$input->created_at= $now;
		$input->save();

		$QR->qrcode=$qr;
		$QR->name=$name;
		$QR->user=$phoneNumber;
		$QR->created_at= $now;
		$QR->save();


		$message="You have made payment of GH$ $totalAmount for the $name event. Please make it a point to attend. You would not regret it. Feel free to share the news with all your loved ones.";

		$message = preg_replace('/\s+/', '%20', $message);/* This line is to replace all spaces in the 
		message with %20. This would make it possible to send the message to the users phone as a text message.*/
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,"http://api.deywuro.com/bulksms/?username=francisK&password=genKay0450&type=0&dlr=1&destination=$phoneNumber&source=fd&message=$message");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('postvar1' => 'value1')));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$server_output = curl_exec ($ch);
		curl_close ($ch);

	return redirect()->route('qr2');
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
