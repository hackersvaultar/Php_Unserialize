<?php
class User {
	public $id = 12;
	public $fname = "john";
	public $lname = "doe";
	public $arr = array();
    	public function __construct()
    	{
		echo "[*] Constructor Called\n";
        	$this->arr[1] = 'new entry';
    	}
}

$u = new User;
echo "[*] Serialized class:\n\n";
echo serialize($u)."\n\n";

