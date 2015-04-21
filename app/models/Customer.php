<?php


class Customer extends Eloquent {

	protected $table = 'customer';
	protected $fillable = array('name', 'email', 'phonenumber');

public function customerValues($customer){
		Customer::create(array(
			'name' => $customer['name'],
			'phonenumber' => $customer['phonenumber'],
			'email' => $customer['email']	
		));
		
}


}
