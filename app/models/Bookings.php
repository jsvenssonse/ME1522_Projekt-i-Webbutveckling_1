<?php


class Bookings extends Eloquent {

protected $table = 'bookings';
protected $fillable = array('week_id', 'house_id, datefrom, dateto');
    
    public function houses(){
        return $this->hasMany('Houses');
    }



}