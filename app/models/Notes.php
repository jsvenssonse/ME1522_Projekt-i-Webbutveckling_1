<?php

class Users extends Eloquent {

	protected $table = 'notes';
	protected $hidden = array('title', 'content');

}
