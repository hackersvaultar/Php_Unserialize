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
	public function __wakeup() {
		echo "wakeup\n";
	}
}



$u_serialized = 'O:4:"User":4:{s:2:"id";i:12;s:5:"fname";s:4:"john";s:5:"lname";s:3:"doe";s:3:"arr";a:1:{i:1;s:9:"new entry";}}';

$u = unserialize($u_serialized);

echo $u->fname;

