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


	public function search(){
		$house = array();
		$house['datepickerfrom'] = new DateTime(Input::get('datepickerfrom'));
		$house['datepickerto'] = new DateTime(Input::get('datepickerto'));
		//var_dump($house['datepickerfrom']);
		//var_dump($house['datepickerto']);
		$data['dates1'] = DB::table('bookings')
			->where('bookings.datefrom', '>=', $house['datepickerfrom']->format('Y-m-d'))
			//->where('bookings.dateto', '<=', $house['datepickerto']->format('Y-m-d'))
			->get();
		
		$counterDates1 = count($data['dates1']);
		var_dump($data['dates1']);

		/*$data['dates2'] = DB::table('bookings')
			->where('bookings.datefrom', '<=', $house['datepickerto']->format('Y-m-d'))
			->get();

		var_dump($data['dates1'][1]->dateto);
		var_dump($house['datepickerto']);
		var_dump($data['dates1'][1]->dateto <= $house['datepickerto']);
		for ($i=0; $i < $counterDates1; $i++) { 
			
			if ($house['datepickerto']==$data['dates1'][$i]->dateto) {
				var_dump($data['dates1'][$i]->dateto);
			}
		}
		unset($data['dates1']->dateto);
		*/
		//dd($data['houses']);
		$data['houses'] = DB::table('houses')
		->get();
		
		return View::make('results', $data);



	}


	public function prices() // Maria lista husen
	{
		//
		return View::make('prices');
	}


	public function search1() // Maria sök husen
	{
		$data['houses'] = DB::table('houses')
		->get();
		//dd($data['houses'][3]->id);


		$countHouses = count($data['houses']);
		//dd($countHouses);

		$house = array();
		$house['datepickerfrom'] = new DateTime(Input::get('datepickerfrom'));
		$house['datepickerto'] = new DateTime(Input::get('datepickerto'));


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
			
			//Här läggs alla kriterier in i en array och dessa ska vara uppfylda
			for ($i=0; $i < count($date); $i++) { 
				array_push($dateArray, ($dateSplitArray[0].'-'.$dateSplitArray[1].'-'.$date[$i])); 
			}

			//var_dump($dateArray);

			//Hämtar alla hus som är bokade mer än 1 vecka
			$data['from'] = DB::table('bookings')
			->where('bookings.weeks', '>', '1')
			->get();
			
			$house1 = array();

			$dateArrayDB = array(Input::get('datepickerfrom'));
			//var_dump($dateArrayDB);
			$dateSplitArray = explode('-' ,$dateArrayDB[0]);

			for ($i=0; $i < count($data['from']); $i++) { 
				$datefromday = new DateTime($data['from'][$i]->datefrom);
				$datetoday = new DateTime($data['from'][$i]->dateto);
				$house1['datepickerfrom'] = $datefromday->format('Y-m-d');
				$house1['datepickerto'] = $datetoday->format('Y-m-d');
				
				$diffCounter = date_diff($datefromday, $datetoday);//Räknar ut dagar
				$diffresults = $diffCounter->format("%a"); //gör så de visas som heltal

				$countWeeksDB = $diffresults/7-1; // Tar reda på veckor
				$houseId = $data['from'][$i]->id;
				for ($j=0; $j < $countWeeksDB; $j++) { 
					if ($j < 1) {
					$temop = $house['datepickerfrom']->format('d')+7;
					$date[$houseId][0] = $temop; //Lägger på 7 dagara på startdatum
					}else{
					$temop = $date[$j-1] + 7;
					$date[$houseId][$j] = $temop;
					}
				}
				dd($date);
				for ($k=0; $k < count($date); $k++) { 
					array_push($dateArrayDB, ($dateSplitArray[0].'-'.$dateSplitArray[1].'-'.$date[$houseId][$k])); 
				}

			}
			var_dump($dateArray);
			//var_dump($data['from'][0]->datefrom);
				//var_dump($variabel);
			//}

			//Här ska vi rensa bort alla hus 


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

	public function checkboxValue() /*Maria testar*/
	{
		$checkbox = array();
		$checkbox['checkbox1'] = Input::get('checkbox1');

		$data = new Houses();
		$data->checkbox($checkbox);

		return View::make('verification');

			}


	public function create() /*Maria Rennemark - save user information*/
	{
		$customer = array();
		$customer['name'] = Input::get('name');
		$customer['phonenumber'] = Input::get('phonenumber');
		$customer['email'] = Input::get('email');

		$data = new Customer();
		$data->customerValues($customer);

		return View::make('verification');

			}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */

	public function store($id) /* Maria Rennemark - add a house to a specific booking*/
	{
		$posthouse = new Houses(
			array(
				'name' => Input::get('checkbox1') ));
		$booking = Bookings::find($id);
		$posthouse = $booking->houses()->save($posthouse);
var_dump($posthouse);
		return Redirect::to('verification'.$id);

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
