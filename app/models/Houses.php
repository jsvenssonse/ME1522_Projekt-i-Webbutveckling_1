<?php


class Houses extends Eloquent {

protected $table = 'Houses';
protected $fillable = array('name', 'spec');

	public function showHouses($house){
			$houses = Houses::find($house);
			return $houses;

		}

	public function booking()
    {
        return $this->belongsToMany('Bookings');
    }

    public function checkbox($checkbox){
    	Houses::create(array('name' => $checkbox['checkbox1']));
    }

    public function weekCounter(){

    	
    }

    public function weekCounter(){

    	
    }

}