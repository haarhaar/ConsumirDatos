<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PersonaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */



				public function index()
					 {
						 $client = new Client([
							 'base_uri' => 'http://localhost/api-rest/public/',
				  		 'timeout'  => 30.0
				  			 ]);

						 if (!$client->get('persona')) {
							 echo 'Que locura!';
						     /*die('An error occurred: '.$client->getError());*/
						 }

						 $response = $client->request('GET', 'persona',
					 					[
					 							'headers' => [
					 									'Accept'     => 'application/json'
					 							]
					 					]
					 			);


								$datos = json_decode($response->getBody()->getContents());
								return view('personas.index', compact('datos'));
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
