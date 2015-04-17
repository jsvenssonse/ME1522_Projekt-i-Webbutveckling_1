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
		return View::make('results');
	}
	
	public function search() // Maria sök husen
	{
		$data['houses'] = DB::table('houses')
		->get();

		$countHouses = count($data['houses']);
		//dd($countHouses);

		$house = array();
		$house['datepickerfrom'] = new DateTime(Input::get('datepickerfrom'));
		$house['datepickerto'] = new DateTime(Input::get('datepickerto'));

		$data['from'] = DB::table('bookings')
		->where('bookings.datefrom', '=', $house['datepickerfrom'])
		->select('bookings.house_id' )//'bookings.house_id', 'bookings.dateto')
		->get();

		//dd(count($data['from']));
		//dd(($data['from'][1]->house_id)-1);
		$diff = date_diff($house['datepickerfrom'], $house['datepickerto']);
		//dd($diff->format("%a"));
		$counterDays = $diff->format("%a");
		if ($counterDays <= 7) {
			$data['from'] = DB::table('bookings')
			->where('bookings.datefrom', '=', $house['datepickerfrom'])
			->select('bookings.house_id' )
			->get();

			for ($i=0; $i < count($data['from']); $i++) {
				$var = ($data['from'][$i]->house_id)-1;
				unset($data['houses'][$var]); //Tar bort alla hus som inte ska vara med
			}
		}elseif ($counterDays >= 7) {
			
			$countWeeks = ($counterDays/7-1);//Skickat ut hur måga veckor
			$dateArray = array(Input::get('datepickerfrom'));
			$dateSplitArray = explode('-' ,$dateArray[0]);

			for ($i=0; $i < $countWeeks; $i++) { 
				if ($i < 1) {
					$temop = $house['datepickerfrom']->format('d')+7;
					$date[0] = $temop; //Lägger på 7 dagara på startdatum
				}else{
					$temop = $date[$i-1] + 7;
					$date[$i] = $temop;
				}
			}
			
			for ($i=0; $i < count($date); $i++) { 
				array_push($dateArray, ($dateSplitArray[0].'-'.$dateSplitArray[1].'-'.$date[$i]));
			}
			var_dump($dateArray[0]);

			//for ($i=0; $i < count($dateArray); $i++) { 
				$data['from'] = DB::table('bookings')
				->where('bookings.datefrom', '=', $dateArray[0])
				//->where('bookings.weeks', '=', $countWeeks+1)
				->select('bookings.house_id' )//'bookings.house_id', 'bookings.dateto')
				->get();
				var_dump($data['from']);
				//var_dump($variabel);
			//}

		}
		
		$data['houses'] = array_values($data['houses']); //Sorterar om husen till en arrays ordning

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
		$customer = array();
		$customer['name'] = Input::get('name');
		$customer['phonenumber'] = Input::get('phonenumber');
		$customer['email'] = Input::get('email');

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
