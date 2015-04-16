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
		$data['houses'] = DB::table('houses')
		->get();
		//dd($data['houses'][3]->id);

		$countHouses = count($data['houses']);
		//dd($countHouses);

		$house = array();
		$house['datepickerfrom'] = Input::get('datepickerfrom');
		$house['datepickerto'] = Input::get('datepickerto');

		$data['from'] = DB::table('bookings')
		->where('bookings.datefrom', '=', $house['datepickerfrom'])
		->select('bookings.house_id' )//'bookings.house_id', 'bookings.dateto')
		->get();
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
