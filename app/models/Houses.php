<?php

class Houses extends Eloquent {

	protected $table = 'houses';
	protected $hidden = array('name', 'beds');

}
