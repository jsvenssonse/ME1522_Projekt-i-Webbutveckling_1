<?php


class Customer extends Eloquent {

	protected $table = 'customer';
	protected $hidden = array('firstname', 'lastname', 'email', 'adress', 'zip_code', 'phonenumber');

}
