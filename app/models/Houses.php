<?php

protected $table = 'Houses';
protected $fillable = array('name', 'beds');

class Houses extends Eloquent {

	public function showHouses($id){
			$houses = Houses::find($id);
			return $houses;
		}

}