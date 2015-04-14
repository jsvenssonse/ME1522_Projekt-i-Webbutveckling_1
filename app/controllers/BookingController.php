<?php

class BookingController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index() // Maria lista husen
	{
		//
		return View::make('booking');
	}
	public function search() // Maria sök husen
	{
		$house = array();
		$house['datepickerfrom'] = Input::get('datepickerfrom');
		$house['datepickerto'] = Input::get('datepickerto');

		$data['from'] = DB::table('bookings')
		->where('bookings.datefrom', '=', $house['datepickerfrom'])
		->select('bookings.house_id', 'bookings.dateto')
		->get();
	
		for ($i=0; $i < 15; $i++) { 
		
			if($data['from'][$i] == $house['datepickerto']){
				echo "true";
			}

			/*$dump = array_key_exists($i, $data['from']);
			if (!$dump) {
				$kung['temp'] = DB::table('houses')
				->where('houses.id', '=', $i)
				->select('houses.name')
				->get();
				var_dump($kung['temp']);
			}*/
		}


		return View::make('results', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id) //Jesper göra en bokning
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
		public function show()
	{

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) //Hämta redan bokad boking
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) //Ändra befintlig boking
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) // ta bort bokning
	{
		//
	}


}
