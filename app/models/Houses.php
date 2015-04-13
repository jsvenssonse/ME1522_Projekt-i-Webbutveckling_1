<?php


class Houses extends Eloquent {

protected $table = 'Houses';
protected $fillable = array('name', 'beds');

	public function showHouses($id){
			$houses = Houses::find($id);
			return $houses;
		}

}