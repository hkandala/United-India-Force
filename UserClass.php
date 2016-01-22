<?php
require_once 'include/php/connect.php';

class User {
	public $id;
	public $name;
	public $age;
	public $email;
	protected $pass;
	public $mobile;
	public $profession;
	public $city;
	public $pincode;
	
	
	function _constructor() {
		$id = null;
	}

    function newUser($name, $age, $email, $pass, $mobile, $profession, $city, $pincode) {
		$this->name = $name;
		$this->age = $age;
		$this->email = $email;
		$this->pass = $pass;
		$this->mobile = $mobile;
		$this->profession = $profession;
		$this->city = $city;
		$this->pincode = $pincode;
	}
	
	function insertUser() {
		$GLOBALS['db']->insert('users','name, age, email, password, mobile, profession, city, pincode',"'$this->name', '$this->age', '$this->email', '$this->pass', '$this->mobile', '$this->profession', '$this->city', '$this->pincode'");
		
	}
	
	function getUserFromUserName($user) {
		$result = $GLOBALS['db']->select('*','users','email',$user);
		$row = $result->fetch_assoc();
		$this->id = $row['id'];
		$this->name = $row['name'];
		$this->age = $row['age'];
		$this->email = $row['email'];
		$this->pass = $row['password'];
		$this->profession = $row['profession'];
		$this->city = $row['city'];
		$this->pincode = $row['pincode'];
	}
	
	function getUser($userId) {
		$result = $GLOBALS['db']->select('*','users','id',$userId);
		$row = $result->fetch_assoc();
		$this->id = $row['id'];
		$this->name = $row['name'];
		$this->age = $row['age'];
		$this->email = $row['email'];
		$this->pass = $row['password'];
		$this->profession = $row['profession'];
		$this->city = $row['city'];
		$this->pincode = $row['pincode'];
	}

	function getName() {
		return $this->name;
	}
}