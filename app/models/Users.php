<?php

class Users extends Eloquent {

	protected $table = 'users';
	protected $hidden = array('username', 'password');

}
