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
	public function show() //Jesper visa spec hus
	{
		$searchValue['datepickerfrom'] = '04/01/2015';//Input::get('datepickerfrom');
		$searchValue['datepickerto'] = '04/04/2015';//Input::get('datepickerto');

		//$temp = new Houses();
		//$searchValues['resultat'] = $temp.searchresults($searchValue);


		var_dump($searchValue);
		return View::make('search', $searchValue);
		//return Redirect::to('search', $searchValue);	
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
