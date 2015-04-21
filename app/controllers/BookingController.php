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
	public function prices() // Maria lista husen
	{
		//
		return View::make('prices');
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

		//dd(count($data['from']));
		//dd(($data['from'][1]->house_id)-1);

		/*for ($i=0; $i < count($data['from']); $i++) {
				if ($i == 0) {
					$var = ($data['from'][0]->house_id)-1;
				}else{
					$var = ($data['from'][$i]->house_id)-count($data['from']);
					var_dump(expression)
				};
			
			unset($data['houses'][$var]);
			//var_dump($data['houses']);
			$data['houses'] = array_values($data['houses']);
			//var_dump($data['houses']);
		}*/

		//dd($data['houses'][0]->name);
		//dd($data['houses']);

		//dd($hus);
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
